@extends('admin.layouts.master')

@section('content')

    <div class="w-full px-4">
        <h1 class="text-3xl text-white">Settings</h1>
    </div>

    <div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
         @endif
                
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>               
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
<div class="max-w-4xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-white mb-6">Change Site Settings</h1>
    <hr class="border-dark-600 mb-6">

        <form action="/settingUpdate" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div>
        <label for="site_name" class="block text-sm font-medium text-gray-300">Site Name</label>
        <input type="text" name="site_name" id="site_name" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_name'] }}">
    </div>

    <div>
        <label for="site_description" class="block text-sm font-medium text-gray-300">Site Description</label>
        <input type="text" name="site_description" id="site_description" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_description'] }}">
    </div>

    <div>
        <label for="site_keywords" class="block text-sm font-medium text-gray-300">Site Keywords</label>
        <input type="text" name="site_keywords" id="site_keywords" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_keywords'] }}">
    </div>

    <div>
        <label for="site_author" class="block text-sm font-medium text-gray-300">Site Author</label>
        <input type="text" name="site_author" id="site_author" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_author'] }}">
    </div>

    <div>
        <label for="site_email" class="block text-sm font-medium text-gray-300">Site Email</label>
        <input type="email" name="site_email" id="site_email" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_email'] }}">
    </div>

    <div>
        <label for="site_phone" class="block text-sm font-medium text-gray-300">Site Phone</label>
        <input type="text" name="site_phone" id="site_phone" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_phone'] }}">
    </div>

    <div>
        <label for="site_address" class="block text-sm font-medium text-gray-300">Site Address</label>
        <input type="text" name="site_address" id="site_address" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_address'] }}">
    </div>

    <div>
        <label for="site_logo" class="block text-sm font-medium text-gray-300">Site Logo</label>
        <input type="file" name="site_logo" id="site_logo" class="mt-1 block w-full text-gray-300">
    </div>

    <div>
        <label for="site_favicon" class="block text-sm font-medium text-gray-300">Site Favicon</label>
        <input type="file" name="site_favicon" id="site_favicon" class="mt-1 block w-full text-gray-300">
    </div>

    <div>
        <label for="site_google_analytics" class="block text-sm font-medium text-gray-300">Google Analytics</label>
        <input type="text" name="site_google_analytics" id="site_google_analytics" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_google_analytics'] }}">
    </div>

    <div>
        <label for="site_google_map" class="block text-sm font-medium text-gray-300">Google Map Embed</label>
        <input type="text" name="site_google_map" id="site_google_map" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_google_map'] }}">
    </div>

    <div>
        <label for="site_google_map_key" class="block text-sm font-medium text-gray-300">Google Map Key</label>
        <input type="text" name="site_google_map_key" id="site_google_map_key" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_google_map_key'] }}">
    </div>

    <div>
        <label for="site_currency" class="block text-sm font-medium text-gray-300">Currency</label>
        <input type="text" name="site_currency" id="site_currency" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_currency'] }}">
    </div>

    <div>
        <label for="site_copyright" class="block text-sm font-medium text-gray-300">Copyright Text</label>
        <input type="text" name="site_copyright" id="site_copyright" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['site_copyright'] }}">
    </div>

    <div>
        <label for="facebook_link" class="block text-sm font-medium text-gray-300">Facebook Link</label>
        <input type="url" name="facebook_link" id="facebook_link" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['facebook_link'] }}">
    </div>

    <div>
        <label for="twitter_link" class="block text-sm font-medium text-gray-300">Twitter Link</label>
        <input type="url" name="twitter_link" id="twitter_link" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['twitter_link'] }}">
    </div>

    <div>
        <label for="linkedin_link" class="block text-sm font-medium text-gray-300">LinkedIn Link</label>
        <input type="url" name="linkedin_link" id="linkedin_link" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['linkedin_link'] }}">
    </div>

    <div>
        <label for="instagram_link" class="block text-sm font-medium text-gray-300">Instagram Link</label>
        <input type="url" name="instagram_link" id="instagram_link" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['instagram_link'] }}">
    </div>

    <div>
        <label for="maintenance_mode" class="block text-sm font-medium text-gray-300">Maintenance Mode</label>
        <select name="maintenance_mode" id="maintenance_mode" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2">
            <option value="0" {{ $setting['maintenance_mode'] == 0 ? 'selected' : '' }}>Off</option>
            <option value="1" {{ $setting['maintenance_mode'] == 1 ? 'selected' : '' }}>On</option>
        </select>
    </div>

    <div>
        <label for="maintenance_mode_text" class="block text-sm font-medium text-gray-300">Maintenance Mode Text</label>
        <input type="text" name="maintenance_mode_text" id="maintenance_mode_text" class="mt-1 block w-full bg-dark-700 border border-gray-600 text-white rounded-md p-2" value="{{ $setting['maintenance_mode_text'] }}">
    </div>

    <div>
        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md">
            Save Settings
        </button>
    </div>
</form>

</div>
@endsection