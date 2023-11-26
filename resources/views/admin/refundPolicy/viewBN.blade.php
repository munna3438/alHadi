@extends('layouts.admin_layout')

@section('stylesheet')
  <link href="{{ asset('assets/admin//css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="ms-panel">
        @include('flash_messages')
      </div>
      <div class="ms-panel">
        {{--<div class="ms-panel-header">--}}
        {{--<h6>Basic Form Elements</h6>--}}
        {{--</div>--}}
        <div class="ms-panel-body">
          <div class="col-sm-3">
            <select onChange="window.location.href=this.value" class="form-control">
              <option value="{{ route('admin.policy.view') }}">English</option>
              <option selected value="{{ route('admin.policy.viewBN') }}">বাংলা</option>
            </select>
          </div>
          <div class="form-group text-right">
            <a href="{{ route('admin.policy.update') }}" class="pull-right btn btn-outline-success btn-sm mb-2">Update Privacy Policy</a>
          </div>
          <div class="col-md-12">
            <h2 class="db-header-title" id="title">{{$policy-> title_bn}}</h2>
          </div>
          <div class="col-md-12">
            <span id="description">{!! $policy-> description_bn !!}</span>
          </div>
        </div>
      </div>
    </div>



  </div>
@endsection


@section('script')
{{--  <script src="{{ asset('assets/admin/js/jquery-3.3.1.min.js') }}"></script>--}}
{{--  <script src="{{ asset('assets/admin/js/datatables.min.js') }}"></script>--}}

{{--  <script>--}}
{{--    var title_en = "<?php echo $policy-> title_en; ?>";--}}
{{--    const title_bn = "<?php echo $policy-> title_en; ?>";--}}
{{--    $(document).ready(function () {--}}
{{--      $("#language").on('change', function () {--}}
{{--        var value = $(this).val();--}}
{{--        if (value == "english"){--}}
{{--          $("#title").text("<?php echo $policy-> title_en; ?>");--}}
{{--          $("#description").text("<?php echo $policy-> description_en; ?>");--}}
{{--        }else {--}}
{{--          $("#title").text("<?php echo $policy-> title_bn; ?>");--}}
{{--          $("#description").text("<?php echo $policy-> description_bn; ?>");--}}
{{--        }--}}
{{--      })--}}

{{--    })--}}
{{--  </script>--}}
@endsection
