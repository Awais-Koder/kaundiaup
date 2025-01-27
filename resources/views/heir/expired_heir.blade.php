<x-app-layout>
    <div class="card mb-4">
        <div class="card-header">{{ __('titles.expired_heir') }}</div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                <tr>
                    <th>{{ __('table.name') }}</th>
                    <th>{{ __('table.fathers_name') }}</th>
                    <th>{{ __('table.tracking_number') }}</th>
                    <th>{{ __('table.certificate_number') }}</th>
                    <th>{{ __('table.delivery_type') }}</th>
                    <th>{{ __('table.total_heirs') }}</th>
                    <th>{{ __('table.mobile') }}</th>
                    <th>{{ __('table.generate_date') }}</th>
                    <th>{{ __('table.action') }}</th>
                </tr>
                </thead>
                <tbody>
                <!-- Example row -->
                <tr>
                    <td>John Smith</td>
                    <td>Michael Smith</td>
                    <td>789123</td>
                    <td>456789</td>
                    <td>{{ __('services.delivery_type_example') }}</td>
                    <td>3</td>
                    <td>+321654987</td>
                    <td>2024-01-15</td>
                    <td>
                        <a href="{{ route('heir.generate') }}" class="btn btn-info btn-sm">{{ __('table.regenerate') }}</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
