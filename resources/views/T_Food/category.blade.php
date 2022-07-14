@extends('T_Food.layout')																
@section('content')																
<div class="inner-header">																
  <div class="container">																
    <div class="pull-left">																
      <h6 class="inner-title">Sản phẩm</h6>																
    </div>																
    <div class="pull-right">																
      <div class="beta-breadcrumb font-large">																
        <a href="index.html">Home</a> / <span>Sản phẩm</span>																
      </div>																
    </div>																
    <div class="clearfix"></div>																
  </div>																
</div>																
<div class="container">																
  <div id="content" class="space-top-none">																
    <div class="main-content">																
      <div class="space60">&nbsp;</div>																
      <div class="row">																
        <div class="col-sm-3">																
          <ul class="aside-menu">																
            @foreach($type_product as $l)																
																
            <li><a href="/type/{{$l->id}}">{{$l->name}}</a></li>																
            @endforeach																
          </ul>																
        </div>																
        <div class="col-sm-9">																
          <div class="beta-products-list">																
																
            <br>																
            @foreach($type_product as $loai)																
            @if( $sp_theoloai[0]->category == $loai->id )																
            <h4 style="text-align:center;   font-weight: bold;"> {{$loai->name}}</h4>																
            @endif																
            @endforeach																
																
            <div class="beta-products-details">																
              <p class="pull-left">{{count($sp_theoloai)}} styles found</p>																
              <div class="clearfix"></div>																
            </div>																
																
            <div class="row">																
              @foreach($sp_theoloai as $sp)																
              <div class="col-sm-4">																
                <div class="single-item">																
                  <div class="single-item-header">																
                    <a href=""><img width="200" height="200" src="/source/image/product/{{$sp->image}}" alt=""></a>																
                  </div>																
                  <div class="single-item-body">																
                    <p class="single-item-title">{{$sp->name}}</p>																
                    <p class="single-item-price" style="text-align:left;font-size: 15px;">																
                      @if($sp->discount==0)																
                      <span class="flash-sale">{{number_format($sp->price)}} Đồng</span>																
                      @else																
                      <span class="flash-del">{{number_format($sp->price)}} Đồng </span>																
                      <span class="flash-sale">{{number_format($sp->discount)}} Đồng</span>																
                      @endif																
                    </p>																
                  </div>																
                  <div class="single-item-caption">																
                    <a class="add-to-cart pull-left" href="#"><i																
                        class="fa fa-shopping-cart"></i></a>																
                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-heart"></i></a>																
                    <a class="beta-btn primary" href="/detail/{{$sp->id}}">Details <i class="fa fa-chevron-right"></i></a>																
                    <div class="clearfix"></div>																
                  </div>																
                </div>																
              </div>																
              @endforeach																
            </div>																
          </div> <!-- .beta-products-list -->																
																
          <div class="space50">&nbsp;</div>																					
        </div>																
      </div> <!-- end section with sidebar and main content -->																
																
    </div> <!-- .main-content -->																
  </div> <!-- #content -->																
</div> <!-- .container -->																
@endsection											