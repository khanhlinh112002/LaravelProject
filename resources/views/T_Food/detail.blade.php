@extends('T_Food.layout')																
@section('content')																
																
</html>	
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="/trangchu">Home</a> / <span>Details</span>		
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-4">																
            <img src="/source/image/product/{{$sanpham->image}}" style="width:150px"alt="">																
          </div>																
          <div class="col-sm-8">																
            <div class="single-item-body">																
              <p class="single-item-title">																
              <h2>{{$sanpham->name}}</h2>																
              </p>																
              <p class="single-item-price" style="text-align:left;font-size: 15px;">																
                <span> @if($sanpham->discount==0)																
                  <span class="flash-sale">{{number_format($sanpham->price)}} Đồng</span>																
                  @else																
                  <span class="flash-del">{{number_format($sanpham->price)}} Đồng và </span>																
                  <span class="flash-sale">Giảm {{number_format($sanpham->discount)}} Đồng</span>																
                  @endif</span>																
              </p>																
            </div>																
																
            <div class="clearfix"></div>																
            <div class="space20">&nbsp;</div>																
																
            <div class="single-item-desc">																
              <p>{{$sanpham->description}}</p>																
            </div>																
            <div class="space20">&nbsp;</div>																
																
            <p>So luong:</p>																
            <div class="single-item-options">																
																
              <select class="wc-select" name="color">																
                <option>So luong</option>																
                <option value="1">1</option>																
                <option value="2">2</option>																
                <option value="3">3</option>																
                <option value="4">4</option>																
                <option value="5">5</option>																
              </select>																
              <a class="add-to-cart" href="#"><i																
                  class="fa fa-shopping-cart"></i></a>																
              <div class="clearfix"></div>																
            </div>																
          </div>																
        </div>																
																
        <div class="space40">&nbsp;</div>																
        <div class="woocommerce-tabs">																
          <ul class="tabs">																
            <li><a href="#tab-description">Description</a></li>																
            <li><a href="#tab-comment">Comments</a></li>																
          </ul>																
																
          <div class="panel" id="tab-description">																
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni	
              dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
              sit amet.</p>																
            <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
              aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
              laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea
              voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla
              pariatur? </p>																
          </div>																
          <div class="panel" id="tab-comment">																														
          </div>																
																
        </div>																
        <div class="space50">&nbsp;</div>																
        </div> <!-- best sellers widget -->																
      </div>																
    </div>																
  </div> <!-- #content -->																
</div> <!-- .container -->																
																
@endsection																
								