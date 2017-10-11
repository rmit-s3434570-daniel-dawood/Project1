@extends('layouts.master')
@section('title', 'Home')
@section('content')
        <!-- Html Form / Bootstrap -->
        <div>
            <form class="form-horizontal">
              <fieldset>
                <legend>Contact Ducky</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label">Comment Here</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
@endsection

