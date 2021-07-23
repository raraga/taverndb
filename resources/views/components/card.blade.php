<div class="col">
<div class="card shadow-sm">
<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
<div class="card-body">
    <h3><a href="card/{{$card->id}}">{{ $card->name }}</a></h3>
  <div class="d-flex justify-content-between align-items-center">
    <div class="btn-group">
        <span class="badge bg-secondary">{{ $card->rank }}</span>
    </div>
    <span class="badge bg-primary">{{ $card->tribe }}</span>
  </div>
</div>
</div>
</div>

