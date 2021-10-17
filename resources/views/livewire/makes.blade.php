<div>
  <table class="table table-striped">
    @foreach ($events as $event)
    <tr>
      <td><a href="{{route('eventauth.edit', $event)}}">{{ $event->title }}</a></td>
    </tr>
    @endforeach
  </table>
</div>
