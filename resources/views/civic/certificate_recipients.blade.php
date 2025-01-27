<x-app-layout>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-3">
                <label for="from-date" class="form-label">{{ __('labels.to_be') }}</label>
                <input type="date" id="from-date" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="to-date" class="form-label">{{ __('labels.until') }}</label>
                <input type="date" id="to-date" class="form-control">
            </div>
            <div class="col-md-2 align-self-end">
                <button class="btn btn-primary w-100">{{ __('table.search') }}</button>
            </div>
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
                    <a href="{{ route('certificate.showBn') }}" target="_blank" class="btn btn-info btn-sm">{{ __('table.bengali') }}</a>
                    <a href="{{ route('certificate.showEn') }}" target="_blank" class="btn btn-success btn-sm">{{ __('table.english') }}</a>
                </td>
                <td>
                    <button class="btn btn-warning btn-sm">{{ __('table.print') }}</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
