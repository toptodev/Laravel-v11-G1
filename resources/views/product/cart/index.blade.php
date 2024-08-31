@extends('layouts.master')

@section('app-content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 pt-5 text-center">
          <h2>ตะกร้าของฉัน</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header bg-dark text-light d-flex justify-content-between">
              <a class="btn btn-outline-info btn-sm px-4" href="{{ route('products.index') }}">
                <i class="fas fa-long-arrow-alt-left"></i>
                ช้อปปิ้งต่อ
              </a>
              <a class="btn btn-outline-info btn-sm px-4" href="{{ route('carts.reset') }}">
                <i class="fas fa-ban"></i>
                Reset
              </a>
            </div>
            <div class="card-body pb-0">
              @if (Session::has('cart'))
                <table class="table-hover table-sm table">
                  <thead>
                  <tr>
                    <th>สินค้า</th>
                    <th class="px-3 text-center">จำนวน</th>
                    <th class="px-3 text-center">ราคา</th>
                    <th class="px-3 text-center">รวมเงิน</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($items as $value)
                    <tr>
                      <td>{{ $value['item']['title'] }}</td>
                      <td class="px-3 text-center" width="100">
                        {{ $value['qty'] }}
                      </td>
                      <td class="px-3 text-end" width="100">
                        {{ number_format($value['item']['price'], 2) }}
                      </td>
                      <td class="px-3 text-end" width="100">
                        {{ number_format($value['qty'] * $value['item']['price'], 2) }}
                      </td>
                      <td class="px-3" width="1">
                        <div class="text-nowrap">
                          <div aria-label="Basic example" class="btn-group" role="group">
                            <a class="btn btn-secondary btn-sm" href="{{ route('carts.reduceByOne', $value['item']['id']) }}">
                              <i class="fas fa-minus-square"></i>
                            </a>
                            <a class="btn btn-secondary btn-sm" href="{{ route('carts.plusByOne', $value['item']['id']) }}">
                              <i class="fas fa-plus-square"></i>
                            </a>
                          </div>
                          <a class="btn btn-danger btn-sm" href="{{ route('carts.removeItem', $value['item']['id']) }}">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <td class="px-3 text-end align-middle" colspan="3">รวมเงินทั้งหมด</td>
                    <td class="px-3 text-end">
                      {{ number_format($totalPrice, 2) }}
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="px-3 text-end align-middle" colspan="3">ค่าจัดส่ง</td>
                    <td class="px-3 text-end">
                      {{ number_format($shoppingCost, 2) }}
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th class="px-3 text-end align-middle" colspan="3">ยอดที่ต้องชำระ</th>
                    <th class="font-x-large px-3 text-end">
                      {{ number_format($totalPrice + $shoppingCost, 2) }}
                    </th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              @else
                <h6 class="text-danger py-5 text-center">ไม่พบรายการในตะกร้าสินค้า</h6>
              @endif
            </div>
            <div class="card-footer text-end">
              <a class="btn btn-success px-4" href="{{ route('carts.checkout', request()->segment_site) }}">
                ดำเนินการ
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
