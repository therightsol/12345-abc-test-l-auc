@if($can)
<form class="search-form" id="add_bid" method="post" action="{{ url('add_bid') }}">
    {{ csrf_field() }}
    <div class="financing_calculator" style="    padding: 0 15px;">
        <h3>Bid On {{ $auction->car->title }}</h3>
        <div class="table-responsive">
            <table class="table no-border no-margin">
                <tbody>
                @if(isset($settings['max_allowed_bids']))
                <tr>
                    <td>Max Allowed Bids:</td>
                    <td>{{ $settings['max_allowed_bids'] }}</td>
                </tr>
                <tr>
                    <td>Your Remaining Bids:</td>
                    <td>{{ $settings['max_allowed_bids'] - Auth::user()->biddings->count() }}</td>
                </tr>
                @endif
                <tr>
                    <?php
                        $bidStartingAmount = 0;
                        if($auction->bidding->count()){
                            $bidStartingAmount = $auction->bidding->max('bid_amount');
                        }
                    $bidStartingAmount = $bidStartingAmount + 1;

                    ?>
                    <td>Bid Amount start from ({{ Helper::currencySymbol() }}){{ $bidStartingAmount }}:</td>
                    <td><input type="number" name="bid_amount" id="bidinput" class="number cost" placeholder="{{ $bidStartingAmount }}"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn-inventory pull-right calculate">Submit</button>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
</form>
    @endif

@if(!\Auth::check())
    <div class="alert alert-info">
        Please <a href="{{ url('login') }}">Login</a> to bid
    </div>
    @endif

@section('js')
    @parent

    <script>
        $('#add_bid').submit(function (e) {
            e.preventDefault();
            var amount = {{ $bidStartingAmount or 0 }};
            if (parseInt($('#bidinput').val()) < amount) {
                alert('Min Bid Amount Is ' + amount);
                return false;
            }
            $(this)[0].submit();
        })
    </script>
@endsection