<div class="card-actionbar">
    <div class="card-actionbar-row">
          @if(url()->current() !== url()->previous())
              <a href="{{ url()->previous() }}" class="btn btn-flat btn-primary ink-reaction pull-left">Go Back</a>
          @endif
        <button type="submit" class="btn btn-flat btn-primary ink-reaction">{{ $buttonText }}</button>
    </div>
</div>