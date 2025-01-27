<x-app-layout>
    <div class="container">
        <h3 class="tit" style="margin-top:0px;margin-bottom:20px;background:lightgray;padding:5px;text-align:center;">
            {{ __('trade_license.title') }}
        </h3>
        <form  action="Genarate/tradelicenseGenarate_action" method="post" class="form-horizontal" role="form">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2  highlisht_font" for="serial_no">{{ __('trade_license.serial_no') }}:</label>
                        <div class="">
                            <input type="text" class="form-control highlisht_font" name="bno" id="bno" readonly="">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2  highlisht_font" for="business_type">{{ __('trade_license.business_type') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="business_type" id="business_type">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="payment_type">{{ __('trade_license.payment_type') }}:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="payment_type" id="payment_type">
                                <option value="">{{ __('trade_license.payment_type') }}</option>
                                <option value="Cash">Cash</option>
                                <option value="Card">Card</option>
                                <option value="Bank">Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="issue_date">{{ __('trade_license.issue_date') }}:</label>
                        <div class="">
                            <input type="date" class="form-control" name="issue_date" id="issue_date">
                        </div>
                        <label class="control-label mt-2 " for="expire_date">{{ __('trade_license.expire_date') }}:</label>
                        <div class="">
                            <input type="date" class="form-control" name="expire_date" id="expire_date">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                            <label class="control-label mt-2 " for="trade_license_fee">{{ __('trade_license.trade_license_fee') }}:</label>
                            <div class="">
                                <input type="text" class="form-control" name="trade_license_fee" id="trade_license_fee">
                            </div>
                            <label class="control-label mt-2 " for="signboard_tax">{{ __('trade_license.signboard_tax') }}:</label>
                            <div class="">
                                <input type="text" class="form-control" name="signboard_tax" id="signboard_tax">
                            </div>
                        </div>
                    <div class="form-group w-100 mb-2">
                        <div class="col-sm-offset-8 col-sm-4">
                            <input type="submit" name="save_tlicence" value="{{ __('trade_license.generate') }}" class="btn btn-info mt-4" id="save_tlicence">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2  highlisht_font" for="tracking_no">{{ __('trade_license.tracking_no') }}:</label>
                        <div class="">
                            <input type="text" class="form-control highlisht_font" name="trackid" id="trackid" value="550351" readonly="">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2  highlisht_font" for="institute_name">{{ __('trade_license.institute_name') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="institute_name" id="institute_name">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="due_amount">{{ __('trade_license.due_amount') }}:</label>
                        <div class="">
                            <input type="text" class="form-control" name="due_amount" id="due_amount">
                        </div>
                        <label class="control-label mt-2 " for="discount_recommendation">{{ __('trade_license.discount_recommendation') }}:</label>
                        <div class="">
                            <input type="text" class="form-control" name="discount_recommendation" id="discount_recommendation">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="vat">{{ __('trade_license.vat') }}:</label>
                        <div class="">
                            <input type="text" class="form-control" name="vat" id="vat">
                        </div>
                        <label class="control-label mt-2 " for="surcharge">{{ __('trade_license.surcharge') }}:</label>
                        <div class="">
                            <input type="text" class="form-control" name="surcharge" id="surcharge">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="total_amount">{{ __('trade_license.total_amount') }}:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="total_amount" id="total_amount">
                        </div>
                    </div>
                    <div class="form-group w-100 mb-2">
                        <label class="control-label mt-2 " for="payment_date">{{ __('trade_license.payment_date') }}:</label>
                        <div class="">
                            <input type="date" class="form-control" name="payment_date" id="payment_date">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
