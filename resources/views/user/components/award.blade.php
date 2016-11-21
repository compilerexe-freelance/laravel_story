<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-offset-4 col-md-4">
          <div class="table-responsive remove-border">
            <table class="table remove-border">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="fa fa-usd fa-lg"></i></td>
                  <td>ยอดเหรียญ</td>
                  <td>1,200,000</td>
                </tr>
                <tr>
                  <td><i class="fa fa-heart fa-lg"></i></td>
                  <td>ยอดหัวใจ</td>
                  <td>50,000</td>
                </tr>
                <tr>
                  <td><i class="fa fa-diamond fa-lg"></i></td>
                  <td>ยอดเพชร</td>
                  <td>20,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-center">
            @php
              use App\GiveLove;
              $check_give_love = new GiveLove;
              $check_give_love = $check_give_love::where('story_id', $story->id)->where('username', Auth::User()->username)->first();
              $result_give_love = 0;
              if (count($check_give_love) > 0) {
                $result_give_love = $check_give_love->status;
              }
            @endphp

            @if ($result_give_love == 0)
              <a href="{{ url('user/love/story/'.$story->id) }}"><button type="button" class="btn btn-danger" style="font-size: 18px;">
                ชอบ <i class="fa fa-exclamation fa-lg"></i>
                มอบ <i class="fa fa-heart fa-lg"></i> ให้เลย
             </button></a>
           @else
             <button type="button" class="btn btn-danger" style="font-size: 18px;" disabled>
               ชอบ <i class="fa fa-exclamation fa-lg"></i>
               มอบ <i class="fa fa-heart fa-lg"></i> ให้เลย
            </button>
           @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
