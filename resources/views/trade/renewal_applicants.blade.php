<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.renewal_applicants') }}</div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.photo') }}</th>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number') }}</th>
                    <th>{{ __('table.certificate_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.expiration_date') }}</th>
                    <th>{{ __('table.application_date') }}</th>
                    <th>{{ __('table.action') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td><img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" alt="{{ __('alt.renewal_photo') }}" class="img-thumbnail"></td>
                    <td>Michael Smith</td>
                    <td>TR67890</td>
                    <td>987654</td>
                    <td>Standard</td>
                    <td>+111222333</td>
                    <td>2023-12-31</td>
                    <td>2024-01-15</td>
                    <td>
                        <a href="{{ route('certificate.TradeRenewal') }}" class="btn btn-secondary btn-sm">{{ __('table.regenerate') }}</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
