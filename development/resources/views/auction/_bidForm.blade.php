@if($can)
<form id="add_bid" method="post" action="{{ url('add_bid') }}">
    {{ csrf_field() }}
    <div class="financing_calculator margin-top-40">
        <h3>Bid On {{ $auction->car->title }}</h3>
        <div class="table-responsive">
            <table class="table no-border no-margin">
                <tbody>
                <tr>
                    <td>Max Allowed Bids:</td>
                    <td>{{ isset($settings['max_allowed_bits'])?$settings['max_allowed_bits']: 'Unlimited' }}</td>
                </tr>
                <tr>
                    <td>Bid Amount({{ Helper::currencySymbol() }}) start from {{ $auction->bid_starting_amount }}:</td>
                    <td><input type="number" name="bid_amount" id="bidinput" class="number cost" placeholder="{{ $auction->bid_starting_amount }}"/></td>
                </tr>
                </tbody>
            </table>
        </div>

        <button type="submit" class="btn-inventory pull-right calculate">Submit</button>

    </div>
</form>
    @endif
@section('js')
    @parent

    <script>
        $('#add_bid').submit(function (e) {
            e.preventDefault();
            var amount = {{ $auction->bid_starting_amount or 0 }};
            if (parseInt($('#bidinput').val()) < amount) {
                alert('Min Bid Amount Is ' + amount);
                return false;
            }
            $(this)[0].submit();
        })
    </script>
@endsection