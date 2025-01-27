<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>{{ __('titles.certificate_recipients') }}</h5>
            <div>
                <input type="date" class="form-control d-inline-block w-auto">
                <button class="btn btn-secondary btn-sm">{{ __('filters.last_2_days') }}</button>
                <button class="btn btn-secondary btn-sm">{{ __('filters.last_week') }}</button>
                <button class="btn btn-secondary btn-sm">{{ __('filters.last_month') }}</button>
                <button class="btn btn-secondary btn-sm">{{ __('filters.all_certificates') }}</button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.photo') }}</th>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number_certificate_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.organization_name') }}</th>
                    <th>{{ __('table.generate_date') }}</th>
                    <th>{{ __('table.certificate') }}</th>
                    <th>{{ __('table.money_receipt') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td><img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" alt="{{ __('alt.recipient_photo') }}" class="img-thumbnail"></td>
                    <td>Jane Doe</td>
                    <td>654321</td>
                    <td>Express</td>
                    <td>+987654321</td>
                    <td>XYZ Corp</td>
                    <td>2024-01-10</td>
                    <td>
                        <a href="{{ route('trade.showBnCert') }}" target="_blank" class="btn btn-info btn-sm">{{ __('table.bengali') }}</a>
                        <a href="{{ route('trade.showEnCert') }}" target="_blank" class="btn btn-success btn-sm">{{ __('table.english') }}</a>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-sm">{{ __('table.print') }}</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
