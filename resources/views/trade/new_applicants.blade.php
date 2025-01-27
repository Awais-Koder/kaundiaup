<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.new_applicants') }}</div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.photo') }}</th>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.organization_name') }}</th>
                    <th>{{ __('table.application_date') }}</th>
                    <th>{{ __('table.certificate') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td><img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" alt="{{ __('alt.applicant_photo') }}" class="img-thumbnail"></td>
                    <td>John Doe</td>
                    <td>TR12345</td>
                    <td>Express</td>
                    <td>+123456789</td>
                    <td>ABC Corp</td>
                    <td>2024-12-01</td>
                    <td>
                        <a href="{{ route('certificate.generateTrade') }}" class="btn btn-primary btn-sm">{{ __('table.generate') }}</a>
                        <button class="btn btn-danger btn-sm">{{ __('table.delete') }}</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
