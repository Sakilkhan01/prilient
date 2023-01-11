@extends('front.layouts.app')
@section('title', $data->meta_title . ' Services')
@section('meta_keywords', $data->meta_keywords)
@section('meta_description', $data->meta_description)
@section('content') 
<style>
.img-banner{
      background-image: url({{ url('assets/images/banner/', $data->banner_image) }});
}
</style>
  <?php echo("$data->description"); ?>
  
@endsection