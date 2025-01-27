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

        <div class="card mb-4">
            <div class="card-header">{{ __('titles.new_applicants') }}</div>
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                    <tr>
                        <th>{{ __('table.no') }}</th>
                        <th>{{ __('table.photo') }}</th>
                        <th>{{ __('table.name') }}</th>
                        <th>{{ __('table.tracking_number') }}</th>
                        <th>{{ __('table.type_of_service') }}</th>
                        <th>{{ __('table.mobile') }}</th>
                        <th>{{ __('table.application_date') }}</th>
                        <th>{{ __('table.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Example row -->
                    <tr>
                        <td>1</td>
                        <td><img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" alt="{{ __('alt.applicant_photo') }}" class="img-thumbnail" width="50"></td>
                        <td>John Doe</td>
                        <td>123456</td>
                        <td>{{ __('services.service_type') }}</td>
                        <td>+123456789</td>
                        <td>2024-01-01</td>
                        <td>
                            <a href="{{ route('certificate.generate') }}" class="btn btn-success btn-sm">{{ __('table.generate') }}</a>
                            <button class="btn btn-danger btn-sm">{{ __('table.delete') }}</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
