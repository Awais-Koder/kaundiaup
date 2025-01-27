<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.expired_trade_license') }}</div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.photo') }}</th>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.certificate_number') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.organization_name') }}</th>
                    <th>{{ __('table.issued_date') }}</th>
                    <th>{{ __('table.expiration_date') }}</th>
                    <th>{{ __('table.action') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td><img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" alt="{{ __('alt.expired_photo') }}" class="img-thumbnail"></td>
                    <td>Anna Taylor</td>
                    <td>TL00123</td>
                    <td>+222333444</td>
                    <td>LMN Pvt Ltd</td>
                    <td>2022-06-01</td>
                    <td>2023-06-01</td>
                    <td>
                        <button class="btn btn-primary btn-sm">{{ __('table.mail') }}</button>
                        <a href="{{ route('certificate.TradeRenewal') }}" class="btn btn-danger btn-sm">{{ __('table.regenerate') }}</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
