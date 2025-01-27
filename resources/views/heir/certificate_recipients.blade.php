<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.certificate_recipients') }}</div>
        <div class="card-body">
            <div class="d-flex mb-3">
                <input type="date" class="form-control me-2" placeholder="{{ __('filters.from_date') }}">
                <input type="date" class="form-control me-2" placeholder="{{ __('filters.until_date') }}">
                <button class="btn btn-primary">{{ __('filters.search') }}</button>
            </div>
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.no') }}</th>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number_certificate_number') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.total_heirs') }}</th>
                    <th>{{ __('table.generate_date') }}</th>
                    <th>{{ __('table.certificate') }}</th>
                    <th>{{ __('table.money_receipt') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td>1</td>
                    <td>Jane Doe</td>
                    <td>654321</td>
                    <td>+987654321</td>
                    <td>6</td>
                    <td>2024-01-10</td>
                    <td>
                        <a href="{{ route('heir.showBnCert') }}" target="_blank" class="btn btn-info btn-sm">{{ __('table.bengali') }}</a>
                        <a href="{{ route('heir.showEnCert') }}" target="_blank" class="btn btn-success btn-sm">{{ __('table.english') }}</a>
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
