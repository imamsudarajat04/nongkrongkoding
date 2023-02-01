@foreach ($item->permissions as $permission)
  {{-- <span class="badge badge-soft-secondary badge-border mb-0">{!! $permission->name !!}</span> --}}
  <span class="badge rounded-pill bg-info">{!! $permission->name !!}</span>
@endforeach