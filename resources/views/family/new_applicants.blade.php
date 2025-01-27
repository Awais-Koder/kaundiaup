<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.new_applicants') }}</div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.tracking_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.total_members') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.application_date') }}</th>
                    <th>{{ __('table.certificate') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td>John Doe</td>
                    <td>123456</td>
                    <td>{{ __('services.delivery_type_example') }}</td>
                    <td>5</td>
                    <td>+123456789</td>
                    <td>2024-12-26</td>
                    <td>
                        <a href="{{ route('heir.generate') }}" class="btn btn-info btn-sm">{{ __('table.generate') }}</a>
                        <button class="btn btn-danger btn-sm">{{ __('table.delete') }}</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
