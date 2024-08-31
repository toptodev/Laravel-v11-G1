<?php

namespace App\Http\Controllers\Banner\Admin;

use App\CustomClass\ItopCyberUpload;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
  private function render(string $view, array $params = [])
  {
    $params['page_title'] = "แบนเนอร์";
    $params['page_subtitle'] = "สามารถ เพิ่มและแก้ไขข้อมูลแบนเนอร์ได้";

    return view($view, $params);
  }

  public function index()
  {
    $banners = Banner::orderByDesc('id')->paginate(20);

    return $this->render('banner.admin.index', compact('banners'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return $this->render('banner.admin.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate(
      [
        "title" => 'required|string',
        'cover' => 'required|image|max:3072|mimes:jpg,jpeg,png,webp'
      ],
      [
        'title.required' => 'โปรดระบุชื่อแบนเนอร์',
        'cover.required' => 'โปรดแนบรูปภาพหน้าปก',
        'cover.max' => 'ภาพหน้าต้องมีขนาดไม่เกิน 3 MB',
        'cover.mimes' => 'ภาพหน้าปกต้องมีนามสกุล *.jpg, *.jpeg, *.png',
      ]
    );

    $banner = Banner::create($request->all());
    if ($banner) {
      if (isset($request['cover'])) {
        Banner::where('id', $banner->id)->update([
          'cover' => $this->ctlUpload($_FILES['cover'], $banner->id)
        ]);
      }
    }

    return redirect()->route('admin.banners.index');
  }


  public function ctlUploadOption()
  {
    return [
      'crop' => [
        'width' => 1920,
        'height' => 476,
        'watermark' => ""
      ]
    ];
  }

  public function ctlUpload($file, $id)
  {
    $folder = strtolower('banner/' . gen_folder($id));
    $options = $this->ctlUploadOption();

    return ItopCyberUpload::upload(storage_path('app/public/' . $folder), $file, $options);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $banner = Banner::findOrFail($id);

    return $this->render('banner.admin.show', compact('banner'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $banner = Banner::findOrFail($id);

    return $this->render('banner.admin.edit', compact('banner'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validated = $request->validate(
      [
        "title" => 'required|string',
      ],
      [
        'title.required' => 'โปรดระบุชื่อแบนเนอร์',
      ]
    );

    $banner = Banner::findOrFail($id);
    $cover = $banner->cover;
    $banner->update($request->all());
    if ($banner) {
      if (isset($request['cover'])) {
        $this->storageDelete($id, $cover);

        Banner::where('id', $banner->id)->update([
          'cover' => $this->ctlUpload($_FILES['cover'], $banner->id)
        ]);
      }
    }

    return redirect()->route('admin.banners.index');
  }

  public function storageDelete($id, $file_name)
  {
    $folder = strtolower('banner/' . gen_folder($id));
    Storage::disk('public')->delete("$folder/$file_name");
    Storage::disk('public')->delete("$folder/crop/$file_name");
    Storage::disk('public')->delete("$folder/thumbnail/$file_name");
    Storage::disk('public')->delete("$folder/resize/$file_name");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Banner::findOrFail($id)->delete();

    return redirect()->route('admin.banners.index');
  }
}
