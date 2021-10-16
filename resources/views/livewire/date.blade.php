<div>
  <table style="color:#FFF;">
    @foreach ($events as $event)
    <tr>
      <td><span>{{ $event->date }}：</span><span>{{ $event->time }}　　</span><span><a href="etc/event-view{{ $event->id }}">{{ $event->title }}</a></span></td>
    </tr>
    @endforeach
  </table>
</div>
