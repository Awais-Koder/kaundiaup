<x-app-layout>
    <x-app-layout>
        <div class="col-lg-12 col-sm-12">
            <div class="container">
                <h3 class="mt-2" style="margin-top:0px;margin-bottom: 20px;background:lightgray;padding:5px;text-align:center;">
                    {{ __('trade_license.renewal_fee_form') }}
                </h3>
                <form action="{{ url('RenewTradeLicense/ReNewTradelicenseGenarate_action') }}" method="post" id="tradelicenseGenarate" class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.serial_no') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="bno" id="bno" readonly>
                        </div>
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.tracking_no') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="trackid" id="trackid" value="124350" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.company_name') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="company" id="company" value="Hongtex Textile BD" readonly>
                        </div>
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.business_type') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" value="{{ __('trade_license.business_type_description') }}" name="bype" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.payment_type') }}</label>
                        <div class="col-sm-4">
                            <select name="acno" class="form-control highlisht_font">
                                <option value="0000-0000-0000-0000">{{ __('trade_license.cash_account') }}</option>
                                <option value="2216/0">{{ __('trade_license.chairman_account') }}</option>
                                <option value="2191/1">{{ __('trade_license.birth_registration_account') }}</option>
                                <option value="1603033008083">{{ __('trade_license.lgsp_account') }}</option>
                                <option value="22751">{{ __('trade_license.land_transfer_tax_account') }}</option>
                                <option value="0001-0001-0001-0001">{{ __('trade_license.own_fund_cash') }}</option>
                                <option value="0002-0002-0002-0002">{{ __('trade_license.own_fund_birth_registration') }}</option>
                                <option value="0003-0003-0003-0003">{{ __('trade_license.dev_fund_lgsp') }}</option>
                                <option value="0004-0004-0004-0004">{{ __('trade_license.dev_fund_land_transfer_tax') }}</option>
                            </select>
                        </div>
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.issued_date') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font hasDatepicker" value="30-12-2024" name="issue_date" id="issue_date" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.expiry_date') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" value="30-06-2025" name="expire_date" readonly>
                        </div>
                        <label class="control-label col-sm-2 highlisht_font" style="color: red;">{{ __('trade_license.renewal_fee') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="fee" id="fee" onkeyup="htmlData('Genarate/ctotal','&fee='+this.value+'&due='+due.value+'&ds='+discount.value);chack();" style="color: red;">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.sub_charge') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="scharge" id="scharge" onkeyup="slip('Genarate/intotal','&sub_charge='+this.value+'&vat='+vat.value+'&fee='+fee.value+'&ds='+discount.value+'&sbf='+sbfee.value+'&due='+due.value)" style="color: blue;">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.total_amount') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="total" id="total" disabled style="color: red;">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('trade_license.payment_date') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font hasDatepicker" value="30-12-2024" name="payment_date" id="payment_date" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-end">
                        <div class="col-sm-offset-8 col-sm-4">
                            <input type="submit" class="btn btn-info btn-sm" value="{{ __('trade_license.generate') }}">
                            <input type="hidden" name="gentype" value="generate">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

</x-app-layout>
