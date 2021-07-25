<div class="col">
<div class="card shadow-sm">
    <div class="card-header"><a href="/card/{{$card->id}}" style="text-decoration:none">{{ $card->name }}</a></div>
<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
<div class="card-body">
  <div class="d-flex justify-content-between align-items-center">
    <div class="btn-group">
        <span class="badge bg-secondary">{{ $card->rank }}</span>
    </div>
    <span class="btn
        @if ($card->tribe === 'murloc')
            btn-success
        @elseif ($card->tribe === 'beast')
            btn-warning text-dark
        @elseif ($card->tribe === 'quillboar')
            btn-secondary
        @elseif ($card->tribe === 'elemental')
            btn-info text-dark
        @elseif ($card->tribe === 'pirate')
            btn-danger
        @elseif ($card->tribe === 'mech')
            btn btn-outline-dark
        @elseif ($card->tribe === 'dragon')
            btn-dark
        @elseif ($card->tribe === 'demon')
            btn-primary
        @elseif ($card->tribe === 'all')
            btn-outline-primary
        @else
            btn-light text-dark
        @endif
        btn-sm">{{ ucfirst(trans($card->tribe)) }}</span>
  </div>
</div>
</div>
</div>

