@php $showarray = Config::get('country-code'); @endphp
<section class="request-quote-card">
      <div class="container">
            <div class="col-lg-12">
                  <div class="textCard">
                     <h5>Request A Quote</h5>
                  </div>
            </div>
            <div class="request-quote-card-body">
                  <form id="RequestQuoteForm" action="javascript:void(0)" method="post">
                  @csrf
                  <div class="row">
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Name:</label>
                              <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Name">
                        </div>
                        </div>
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Email:</label>
                              <input type="email" class="form-control"  id="email" name="email" placeholder="Enter Email Address">
                        </div>
                        </div>
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                        <label for="exampleInputName">Phone No. :</label>
                           <div class="d-flex">
                              <div>
                                    <select id="phone_code" class="form-control countryCode" name="phone_code">
                                    @foreach ($showarray as $key => $code)
                                     <option value="+{{ $key }}" @if($key == "91") selected @endif>+{{ $key }}</option>
                                    @endforeach
                                    </select>
                              </div>
                              <div>
                                    <input type="text" class="form-control ml-2 phone_" id="phone" name="phone" maxlength="10" placeholder="Enter Phone Number">
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Message:</label>
                              <input type="text" class="form-control" id="message" name="message" placeholder="Description">
                        </div>
                        </div>
                        <div class="rq_btn">
                              <button type="submit" class="btn submit">SUBMIT</button>
                        </div>
                  </div>
                  </form>
            </div>
      </div>
</section>