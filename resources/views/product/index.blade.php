@extends('layouts.master')

@section('title')
    Rooms | รายการสินค้า
@endsection

@section('content')
    <h1>รายการสินค้า</h1>
    <div class="panel panel-default" id="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>รายการ</strong>
            </div>
        </div>

        <div class="panel-body">
            <form action="{{ URL::to('product/search') }}" method="POST" class="form-inline">
                {{ csrf_field() }}
                <input type="text" name="q" class="form-control" placeholder="ค้นหาสินค้า...">
                <button type="submit" class="btn btn-primary">ค้นหา</button>

                <a href="{{ URL::to('product/edit') }}" class="btn btn-success pull-right"> เพิ่มสินค้า </a>
            </form>
        </div>

        <table class="table table-bordered table-hover" id="table-index">
            <thead>
                <tr>
                    <th>รูปสินค้า</th>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ประเภท</th>
                    <th>คงเหลือ</th>
                    <th>ราคา</th>
                    <th>การทำงาน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td><img src="{{ $p->image_url }}" width="64" alt=""></td>
                        <td>{{ $p->code }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->category->name }}</td>
                        <td class="bs-price">{{ number_format($p->stock_qty, 0) }}</td>
                        <td class="bs-price">{{ number_format($p->price, 2) }}</td>
                        <td class="bs-center">
                            <a href="{{ URL::to('product/edit/'.$p->id) }}" class="btn btn-info">
                                <i class="fa fa-edit"></i> แก้ไข
                            </a>
                            <a href="#" class="btn btn-danger btn-delete" id-delete="{{ $p->id }}">
                                <i class="fa fa-trash"></i> ลบ
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">รวม</th>
                    <th class="bs-price">{{ number_format($products->sum('stock_qty'), 0) }}</th>
                    <th class="bs-price">{{ number_format($products->sum('price'), 2) }}</th>
                </tr>
            </tfoot>
        </table>

        <div class="panel-footer">
            <span>แสดงข้อมูลจำนวน {{ count($products) }} รายการ</span>
        </div>
    </div>

    <div class="pagination-left">
        {{ $products->links() }}
    </div>

    <script>
        $('.btn-delete').on('click', function() {
            if(confirm('คุณต้องการลบข้อมูลสินค้านี้หรือไม่?')) {
                var url = "{{ URL::to('product/remove') }}" + '/' + $(this).attr('id-delete');
                window.location.href = url;
            }
        });
    </script>
@endsection
