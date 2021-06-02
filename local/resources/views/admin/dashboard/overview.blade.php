<div class="row">
<div class="col m-b-30">
<div class="card ">
<div class="   text-center card-body">
<div class="text-success   ">
<div class="avatar avatar-sm ">
<span class="avatar-title rounded-circle badge-soft-success"><i class="mdi mdi-home mdi-18px"></i> </span>

</div>
<h6 class="m-t-5 m-b-0">&nbsp;</h6>
</div>


<div class=" text-center">
<h3 style="font-size: 1rem">Tổng số cửa hàng</h3>
</div>
<div class="text-overline ">
{{ $overview['store'] }}
</div>
</div>
</div>
</div>
<div class="col m-b-30">
<div class="card ">
<div class="   text-center card-body">
<div class="text-danger   ">
<div class="avatar avatar-sm ">
<span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-cart mdi-18px"></i> </span>

</div>
<h6 class="m-t-5 m-b-0">&nbsp;</h6>
</div>


<div class=" text-center">
<h3 style="font-size: 1rem">Tổng số đơn hàng</h3>
</div>
<div class="text-overline ">{{ $overview['order'] }}</div>
</div>
</div>
</div>
<div class="col m-b-30">
<div class="card ">
<div class="   text-center card-body">
<div class="text-warning   ">
<div class="avatar avatar-sm ">
<span class="avatar-title rounded-circle badge-soft-warning"><i class="mdi mdi-calendar-check mdi-18px"></i> </span>

</div>
<h6 class="m-t-5 m-b-0"> &nbsp;</h6>
</div>


<div class=" text-center">
<h3 style="font-size: 1rem"> Đơn hàng đã hoàn thành </h3>
</div>
<div class="text-overline ">{{ $overview['dagiao'] }}</div>
</div>
</div>
</div>
<div class="col m-b-30">
<div class="card ">
<div class="   text-center card-body">
<div class="text-info   ">
<div class="avatar avatar-sm ">
<span class="avatar-title rounded-circle badge-soft-info"><i class="mdi mdi-cart-arrow-right mdi-18px"></i> </span>

</div>
<h6 class="m-t-5 m-b-0"> &nbsp;</h6>
</div>


<div class=" text-center">
<h3 style="font-size: 1rem">Đơn đặt hàng tháng này</h3>
</div>
<div class="text-overline ">{{ $overview['month'] }}</div>
</div>
</div>
</div>
<div class="col d-lg-block d-none m-b-30">
<div class="card ">
<div class="   text-center card-body">
<div class="text-danger   ">
<div class="avatar avatar-sm ">
<span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-account mdi-18px"></i> </span>

</div>
<h6 class="m-t-5 m-b-0">&nbsp;</h6>
</div>


<div class=" text-center">
<h3 style="font-size: 1rem">Người dùng ứng dụng</h3>
</div>
<div class="text-overline ">{{ $overview['user'] }}</div>
</div>
</div>
</div>

</div>