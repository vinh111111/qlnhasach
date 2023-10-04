@extends('layout.master')

@section('css')
    <!-- Đặt các tệp CSS tại đây -->
@endsection

@section('content')
    <!-- Nội dung trang -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body p-0">
                            <div class="iq-edit-list">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Tất cả
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Đang chuẩn bị hàng
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                            Đang giao hàng
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                            Đã nhận hàng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Tất cả đơn hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        @isset($bill)
                                        @if(count($bill) > 0)
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i=1;
                                                    @endphp
                                                    @foreach($bill as $order)
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$order->user->full_name}}</td>
                                                            <td>{{$order->name}}</td>
                                                            <td>
                                                                <p class="mb-0">{{$order->phone_number}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order->address}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order->address_type}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order->status}}</p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="{{ route('getHomepage') }}">tại đây</a>.</p>
                                        @endif
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đang chuẩn bị hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        @isset($bill1)
                                        @if(count($bill1) > 0)
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i1=1;
                                                    @endphp
                                                    @foreach($bill1 as $order1)
                                                        <tr>
                                                            <td>{{$i1}}</td>
                                                            <td>{{$order1->user->full_name}}</td>
                                                            <td>{{$order1->name}}</td>
                                                            <td>
                                                                <p class="mb-0">{{$order1->phone_number}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order1->address}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order1->address_type}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order1->status}}</p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i1++;
                                                        @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="{{ route('getHomepage') }}">tại đây</a>.</p>
                                        @endif
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đang giao hàng</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        @isset($bill2)
                                        @if(count($bill2) > 0)
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i2=1;
                                                    @endphp
                                                    @foreach($bill2 as $order2)
                                                        <tr>
                                                            <td>{{$i2}}</td>
                                                            <td>{{$order2->user->full_name}}</td>
                                                            <td>{{$order2->name}}</td>
                                                            <td>
                                                                <p class="mb-0">{{$order2->phone_number}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order2->address}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order2->address_type}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order2->status}}</p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i2++;
                                                        @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="{{ route('getHomepage') }}">tại đây</a>.</p>
                                        @endif
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Đã giao thành công</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        @isset($bill3)
                                        @if(count($bill3) > 0)
                                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">STT</th>
                                                        <th style="width: 15%;">Người đặt</th>
                                                        <th style="width: 15%;">Người nhận</th>
                                                        <th style="width: 10%;">Số điện thoại</th>
                                                        <th style="width: 15%;">Địa chỉ</th>
                                                        <th style="width: 15%;">Loại địa chỉ</th>
                                                        <th style="width: 10%;">Trạng thái</th>
                                                        <th style="width: 15%;">Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i3=1;
                                                    @endphp
                                                    @foreach($bill3 as $order3)
                                                        <tr>
                                                            <td>{{$i3}}</td>
                                                            <td>{{$order3->user->full_name}}</td>
                                                            <td>{{$order3->name}}</td>
                                                            <td>
                                                                <p class="mb-0">{{$order3->phone_number}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order3->address}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order3->address_type}}</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">{{$order3->status}}</p>
                                                            </td>
                                                            <td>
                                                                <div style="justify-content:space-around;align-Items:center;display:flex;width: 100px">
                                                                    ooooooooo
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i3++;
                                                        @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                        <p>Không có đơn hàng nào.<br>Mời bạn tiếp tục mua hàng <a href="{{ route('getHomepage') }}">tại đây</a>.</p>
                                        @endif
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
@endsection
