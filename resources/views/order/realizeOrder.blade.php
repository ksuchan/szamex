
{{-- action="{{ url('createOrder') }}" --}}
{{-- route('cart.show', ['cart' => $cart->id]) --}}
<form  action="{{ route('order.createOrder', ['cart' => $cart]) }}" method="post" accept-charset="utf-8">
    @csrf
    <div class="order-form">
        <div class="form-group">
           <label class="control-label col-sm-2" name="cartId" id="cartId" for="cartId">Numer koszyka: {{ $cart->ordinal_number }}</label>
        </div>
       <div class="form-group">
          <label class="control-label col-sm-2" for="fullname">Imię i nazwisko:</label>
          <div class="col-sm-10">          
             <input type="text" class="form-control" id="fullName" placeholder="Imię i nazwisko" name="fullName">
             <span class="text-danger">{{ $errors->first('fullName') }}</span>
          </div>
       </div>
       <div class="form-group">
          <label class="control-label col-sm-2" for="address">Adres:</label>
          <div class="col-sm-10">          
             <input type="text" class="form-control" id="address" placeholder="Adres" name="address">
             <span class="text-danger">{{ $errors->first('address') }}</span>
          </div>
       </div>
       <div class="form-group">
          <label class="control-label col-sm-2" for="city">Miasto:</label>
          <div class="col-sm-10">          
             <input type="text" class="form-control" id="city" placeholder="Miasto" name="city">
             <span class="text-danger">{{ $errors->first('city') }}</span>
          </div>
       </div>
       <div class="form-group">
          <label class="control-label col-sm-2" for="phoneNumber">Numer telefonu:</label>
          <div class="col-sm-10">          
             <input type="text" class="form-control" id="phoneNumber" placeholder="Numer telefonu" name="phoneNumber">
             <span class="text-danger">{{ $errors->first('phoneNumber') }}</span>
          </div>
       </div>
       <div class="select-payment">
           <label>Forma płatności</label>
           <div class="select-wrapper">
               <select>
                   <option>Gotówka</option>
                   <option>Karta</option>
                   <option>Przelew</option>
                   <option>Bitcoin</option>
               </select>
           </div>
       </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-default">PŁACĘ</button>
          </div>
       </div>
    </div>
 </form>