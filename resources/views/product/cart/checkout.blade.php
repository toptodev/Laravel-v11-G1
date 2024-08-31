@extends('layouts.master')

@section('app-content')
		<section>
				<div class="container">
						<div class="row">
								<div class="col-sm-12 pt-5 text-center">
										<h2>สรุปรายการสั่งซื้อ</h2>
								</div>
						</div>
						<div class="row justify-content-center">
								<div class="col-md-12">
										<form action="{{ route('carts.save') }}"
												method="POST"
												name="form">
												@csrf
												<div class="row justify-content-center">
														<div class="col-md-8">
																<fieldset>
																		<legend>รายการสั่งซื้อ</legend>
                                  <div class="row">
                                    <div class="col-md-12">
                                      @if (Session::has('cart'))
                                        <ol class="p-0 pl-1">
                                          @foreach ($items as $value)
                                            <li class="d-flex justify-content-between border-bottom pt-1">
                                              <span>{{ $value['qty'] }} x {{ $value['item']['title'] }}</span>
                                              <span>{{ number_format($value['item']['price'], 2) }}</span>
                                            </li>
                                          @endforeach
                                        </ol>
                                      @else
                                        No items in Cart!
                                      @endif

                                      <div class="py-4">
                                        <div class="d-flex justify-content-between">
                                          <div>รวมเงิน</div>
                                          <div>{{ number_format($totalPrice, 2) }}</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <div>ค่าจัดส่ง</div>
                                          <div>{{ number_format($shoppingCost, 2) }}</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <div class="font-weight-bold text-middle">ยอดที่ต้องชำระ</div>
                                          <div class="font-x-large font-weight-bold">
                                            {{ number_format($totalPrice + $shoppingCost, 2) }}
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
																</fieldset>
														</div>
														<div class="col-md-8">
																<fieldset>
																		<legend>รายละเอียดของคุณ</legend>
																		<div class="row g-3 pb-4">
																				<div class="col-6">
																						<label class="form-label">ชื่อจริง *</label>
																						<input class="form-control @error('name') is-invalid @enderror"
														{{----}}										name="name"
																								placeholder="ชื่อจริง"
																								type="text">
																						@error('name')
																								<p class="invalid-feedback">{{ $message }}</p>
																						@enderror
																				</div>
																				<div class="col-6">
																						<label class="form-label">ที่อยู่อีเมล์ *</label>
																						<input class="form-control @error('email') is-invalid @enderror"
																								name="email"
																								placeholder="ที่อยู่อีเมล์ของคุณ"
																								type="email">
																						@error('email')
																								<p class="invalid-feedback">{{ $message }}</p>
																						@enderror
																				</div>
																				<div class="col-3">
																						<label class="form-label">เบอร์โทรศัพท์ *</label>
																						<input class="form-control @error('tel') is-invalid @enderror"
																								name="tel"
																								placeholder="เบอร์โทรศัพท์"
																								type="text">
																						@error('tel')
																								<p class="invalid-feedback">{{ $message }}</p>
																						@enderror
																				</div>
																				<div class="col-9">
																						<label class="form-label">ที่อยู่จัดส่งสินค้า *</label>
																						<input class="form-control @error('destination') is-invalid @enderror"
																								name="destination"
																								placeholder="เบอร์โทรศัพท์"
																								type="text">
																						@error('destination')
																								<p class="invalid-feedback">{{ $message }}</p>
																						@enderror
																				</div>
																		</div>
																</fieldset>
														</div>
														<div class="col-md-8 mb-4">
																<fieldset>
																		<legend>การชำระเงิน</legend>
																		<div class="row g-3 pb-4">
																				<div class="col-md-12">
																						<strong>เลือกช่องทางการชำระเงิน</strong>
																						<div class="my-2 ml-3">
																								<div class="form-check form-check-inline">
																										<label class="form-check-label">
																												<input checked
																														class="form-check-input"
																														name="payment[channel]"
																														type="radio"
																														value="internet_bankg">
																												ชำระเงินผ่านการโอน
																										</label>
																								</div>
																								<div class="form-check form-check-inline">
																										<label class="form-check-label">
																												<input class="form-check-input"
																														name="payment[channel]"
																														type="radio"
																														value="pay_online">
																												ชำระออนไลน์
																										</label>
																								</div>
																								<div class="form-check form-check-inline">
																										<label class="form-check-label">
																												<input class="form-check-input"
																														name="payment[channel]"
																														type="radio"
																														value="line_pay">
																												Rabbit LINE Pay
																										</label>
																								</div>
																						</div>
																				</div>
																				<div class="col-12">
																						<button class="btn btn-primary"
																								type="submit">
																								ยืนยันการสั่งซื้อ
																						</button>
																				</div>
																		</div>
																</fieldset>
														</div>
												</div>
										</form>
								</div>
						</div>
				</div>
		</section>
@endsection
