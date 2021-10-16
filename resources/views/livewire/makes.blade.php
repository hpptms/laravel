<div>
  <table class="table table-striped">
    @foreach ($events as $event)
    <tr>
      <td><a href="event-change{{ $event->id }}">{{ $event->title }}</a></td>
    </tr>
    @endforeach
  </table>
</div>
