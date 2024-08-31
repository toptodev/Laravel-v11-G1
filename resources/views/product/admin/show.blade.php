@extends('layouts.admin.master')

@section('app-content')
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="tile">
        <h3 class="tile-title">แก้ไขรายการ</h3>
        <div class="tile-body">
          <table class="table-striped table">
            <tr>
              <td width="200">รหัสสินค้า</td>
              <td>{{ $product->code }}</td>
            </tr>
            <tr>
              <td>ชื่อสินค้า</td>
              <td>{{ $product->title }}</td>
            </tr>
            <tr>
              <td>หน้าปก</td>
              <td>
                <img class="img-fluid"
                     src="{{ Storage::url('product/' . gen_folder($product->id) . '/' . $product->cover) }}">
              </td>
            </tr>
            <tr>
              <td>ราคาจริง</td>
              <td>{{ number_format($product->price_actual, 2) }}</td>
            </tr>
            <tr>
              <td>ราคาขาย</td>
              <td>{{ number_format($product->price, 2) }}</td>
            </tr>
            <tr>
              <td>ประเภท</td>
              <td>
                @foreach ($product->types as $type)
                  {{ $type == 'recommand' ? '🫢 สินค้าแนะนำ' : '' }}
                  {{ $type == 'new' ? '🧐 สินค้าใหม่' : '' }}
                  {{ $type == 'hot' ? '😋 สินค้าที่ได้รับความนิยม' : '' }}
                @endforeach
              </td>
            </tr>
            <tr>
              <td>รายละเอียด</td>
              <td>{{ $product->detail }}</td>
            </tr>
            <tr>
              <td colspan="2">
                รูปภาพประกอบเพิ่มเติม <br/>
                <div class="row g-3 g-c">
                  @if (!empty($product->images))
                    @foreach ($product->images as $image)
                      <div class="col-md-4">
                        <img class="img-fluid"
                             src="{{ Storage::url('product/' . gen_folder($product->id) . '/' . $image['name_uploaded']) }}">
                      </div>
                    @endforeach
                  @endif
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script-content')
@endsection
