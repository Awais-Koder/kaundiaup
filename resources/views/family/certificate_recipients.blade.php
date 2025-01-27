<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.certificate_recipients') }}</div>
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <input type="date" class="form-control me-2" placeholder="{{ __('filters.date_placeholder') }}">
                <button class="btn btn-primary me-3">{{ __('filters.search') }}</button>
                <button class="btn btn-secondary me-2">{{ __('filters.last_two_days') }}</button>
                <button class="btn btn-secondary me-2">{{ __('filters.last_week') }}</button>
                <button class="btn btn-secondary me-2">{{ __('filters.last_month') }}</button>
                <button class="btn btn-secondary">{{ __('filters.all_certificates') }}</button>
            </div>
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number') }}</th>
                    <th>{{ __('table.certificate_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.total_members') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.generate_date') }}</th>
                    <th>{{ __('table.certificate') }}</th>
                    <th>{{ __('table.money_receipt') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td>Jane Doe</td>
                    <td>654321</td>
                    <td>987654</td>
                    <td>{{ __('services.delivery_type_example') }}</td>
                    <td>6</td>
                    <td>+987654321</td>
                    <td>2024-01-10</td>
                    <td>
                        <a href="{{ route('family.showBnCert') }}" target="_blank" class="btn btn-info btn-sm">{{ __('table.bengali') }}</a>
                        <a href="{{ route('family.showEnCert') }}" target="_blank" class="btn btn-success btn-sm">{{ __('table.english') }}</a>
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
