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
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>{{ __('table.no') }}</th>
                            <th>{{ __('table.photo') }}</th>
                            <th>{{ __('table.name') }}</th>
                            {{-- <th>{{ __('table.tracking_number') }}</th> --}}
                            <th>{{ __('table.type_of_service') }}</th>
                            <th>{{ __('table.mobile') }}</th>
                            <th>{{ __('table.application_date') }}</th>
                            <th>{{ __('table.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example row -->
                        @foreach ($data as $key => $data)
                            <tr>
                                <td>{{ $key += 1 }}</td>
                                <td>
                                    <img src="{{ $data->image ? Storage::url($data->image) : 'https://www.kaundiaup.com/img/default/profile.png' }}"
                                        width="50">
                                </td>
                                <td>{{ $data->name_bn }}</td>
                                {{-- <td>123456</td> --}}
                                <td>{{ App\Services\DefaultService::getCertificateName($data->certificate_id)->certificate_name }}
                                </td>
                                <td>{{ $data->mobile }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <a href="{{ route('certificate.generate' , $data->id) }}"
                                        class="btn btn-success btn-sm">{{ __('table.generate') }}</a>
                                    <button class="btn btn-danger btn-sm">{{ __('table.delete') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
@push('scripts')
<script>
    let table = new DataTable('#datatablesSimple');
</script>
@endpush
