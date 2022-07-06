
@if(in_array('admin', explode('/', url()->current() ) ) )
  @include('backend.pages.error')
@else
  @include('frontend.pages.error')
@endif
