<div class="col">
    <div class="card border-0 scroll-mt-3" id="basicInformationSection">
        <div class="card-header">
            <h2 class="h3 mb-0">Basic information</h2>
        </div>
        <div>
            <form method="POST" action="javascript:void(0)" id="updateprofileform">
                @csrf
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">Full Name</label>
                        </div>
                        <div class="col-lg">
                            <input type="text" class="form-control" id="fullName" value="{{ Auth::user()->name }}" name="name" required>
                            <div class="invalid-feedback">Please add your full name</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="phone" class="col-form-label">Phone</label>
                        </div>
                        <div class="col-lg">
                            <input type="text" class="form-control" id="phone" value="{{ Auth::user()->phone }}" name="phone" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="emailAddress" class="col-form-label">Email address</label>
                        </div>
                        <div class="col-lg">
                            <input type="text" class="form-control" id="emailAddress" value="{{ Auth::user()->email }}" name="email" readonly>
                            <div class="invalid-feedback">Please add your email address</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="country" class="col-form-label">Country</label>
                        </div>
                        <div class="col-lg">
                            <div class="mb-4">
                                <select class="form-select" required name="country" id="country">
                                    @php
                                        // Get the user's saved country, normalize it (lowercase and trim whitespace)
                                        $userCountry = strtolower(trim(Auth::user()->country));

                                        // Define your countries as an associative array: 'value_to_save' => 'Display Name'
                                        // This allows you to have different display names for certain values if needed.
                                        $countries = [
                                            'Afghanistan' => 'Afghanistan',
                                            'Albania' => 'Albania',
                                            'Algeria' => 'Algeria',
                                            'Andorra' => 'Andorra',
                                            'Angola' => 'Angola',
                                            'Antigua and Barbuda' => 'Antigua and Barbuda',
                                            'Argentina' => 'Argentina',
                                            'Armenia' => 'Armenia',
                                            'Australia' => 'Australia',
                                            'Austria' => 'Austria',
                                            'Azerbaijan' => 'Azerbaijan',
                                            'Bahamas' => 'Bahamas',
                                            'Bahrain' => 'Bahrain',
                                            'Bangladesh' => 'Bangladesh',
                                            'Barbados' => 'Barbados',
                                            'Belarus' => 'Belarus',
                                            'Belgium' => 'Belgium',
                                            'Belize' => 'Belize',
                                            'Benin' => 'Benin',
                                            'Bhutan' => 'Bhutan',
                                            'Bolivia' => 'Bolivia',
                                            'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                                            'Botswana' => 'Botswana',
                                            'Brazil' => 'Brazil',
                                            'Brunei Darussalam' => 'Brunei Darussalam',
                                            'Bulgaria' => 'Bulgaria',
                                            'Burkina Faso' => 'Burkina Faso',
                                            'Burundi' => 'Burundi',
                                            'Cabo Verde' => 'Cabo Verde',
                                            'Cambodia' => 'Cambodia',
                                            'Cameroon' => 'Cameroon',
                                            'Canada' => 'Canada',
                                            'Central African Republic' => 'Central African Republic',
                                            'Chad' => 'Chad',
                                            'Chile' => 'Chile',
                                            'China' => 'China',
                                            'Colombia' => 'Colombia',
                                            'Comoros' => 'Comoros',
                                            'Congo' => 'Congo',
                                            'Costa Rica' => 'Costa Rica',
                                            'Croatia' => 'Croatia',
                                            'Cuba' => 'Cuba',
                                            'Cyprus' => 'Cyprus',
                                            'Czech Republic' => 'Czech Republic',
                                            'Denmark' => 'Denmark',
                                            'Djibouti' => 'Djibouti',
                                            'Dominica' => 'Dominica',
                                            'Dominican Republic' => 'Dominican Republic',
                                            'Ecuador' => 'Ecuador',
                                            'Egypt' => 'Egypt',
                                            'El Salvador' => 'El Salvador',
                                            'Equatorial Guinea' => 'Equatorial Guinea',
                                            'Eritrea' => 'Eritrea',
                                            'Estonia' => 'Estonia',
                                            'Eswatini' => 'Eswatini',
                                            'Ethiopia' => 'Ethiopia',
                                            'Fiji' => 'Fiji',
                                            'Finland' => 'Finland',
                                            'France' => 'France',
                                            'Gabon' => 'Gabon',
                                            'Gambia' => 'Gambia',
                                            'Georgia' => 'Georgia',
                                            'Germany' => 'Germany',
                                            'Ghana' => 'Ghana',
                                            'Greece' => 'Greece',
                                            'Grenada' => 'Grenada',
                                            'Guatemala' => 'Guatemala',
                                            'Guinea' => 'Guinea',
                                            'Guinea-Bissau' => 'Guinea-Bissau',
                                            'Guyana' => 'Guyana',
                                            'Haiti' => 'Haiti',
                                            'Honduras' => 'Honduras',
                                            'Hungary' => 'Hungary',
                                            'Iceland' => 'Iceland',
                                            'India' => 'India',
                                            'Indonesia' => 'Indonesia',
                                            'Iran' => 'Iran',
                                            'Iraq' => 'Iraq',
                                            'Ireland' => 'Ireland',
                                            'Israel' => 'Israel',
                                            'Italy' => 'Italy',
                                            'Jamaica' => 'Jamaica',
                                            'Japan' => 'Japan',
                                            'Jordan' => 'Jordan',
                                            'Kazakhstan' => 'Kazakhstan',
                                            'Kenya' => 'Kenya',
                                            'Kiribati' => 'Kiribati',
                                            'Korea, Democratic People\'s Republic of' => 'North Korea', // Example of different display name
                                            'Korea, Republic of' => 'South Korea', // Example of different display name
                                            'Kuwait' => 'Kuwait',
                                            'Kyrgyzstan' => 'Kyrgyzstan',
                                            'Laos' => 'Laos',
                                            'Latvia' => 'Latvia',
                                            'Lebanon' => 'Lebanon',
                                            'Lesotho' => 'Lesotho',
                                            'Liberia' => 'Liberia',
                                            'Libya' => 'Libya',
                                            'Liechtenstein' => 'Liechtenstein',
                                            'Lithuania' => 'Lithuania',
                                            'Luxembourg' => 'Luxembourg',
                                            'Madagascar' => 'Madagascar',
                                            'Malawi' => 'Malawi',
                                            'Malaysia' => 'Malaysia',
                                            'Maldives' => 'Maldives',
                                            'Mali' => 'Mali',
                                            'Malta' => 'Malta',
                                            'Marshall Islands' => 'Marshall Islands',
                                            'Mauritania' => 'Mauritania',
                                            'Mauritius' => 'Mauritius',
                                            'Mexico' => 'Mexico',
                                            'Micronesia (Federated States of)' => 'Micronesia',
                                            'Moldova (Republic of)' => 'Moldova',
                                            'Monaco' => 'Monaco',
                                            'Mongolia' => 'Mongolia',
                                            'Montenegro' => 'Montenegro',
                                            'Morocco' => 'Morocco',
                                            'Mozambique' => 'Mozambique',
                                            'Myanmar' => 'Myanmar',
                                            'Namibia' => 'Namibia',
                                            'Nauru' => 'Nauru',
                                            'Nepal' => 'Nepal',
                                            'Netherlands' => 'Netherlands',
                                            'New Zealand' => 'New Zealand',
                                            'Nicaragua' => 'Nicaragua',
                                            'Niger' => 'Niger',
                                            'Nigeria' => 'Nigeria', // Current location example
                                            'North Macedonia' => 'North Macedonia',
                                            'Norway' => 'Norway',
                                            'Oman' => 'Oman',
                                            'Pakistan' => 'Pakistan',
                                            'Palau' => 'Palau',
                                            'Panama' => 'Panama',
                                            'Papua New Guinea' => 'Papua New Guinea',
                                            'Paraguay' => 'Paraguay',
                                            'Peru' => 'Peru',
                                            'Philippines' => 'Philippines',
                                            'Poland' => 'Poland',
                                            'Portugal' => 'Portugal',
                                            'Qatar' => 'Qatar',
                                            'Romania' => 'Romania',
                                            'Russia' => 'Russia',
                                            'Rwanda' => 'Rwanda',
                                            'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                                            'Saint Lucia' => 'Saint Lucia',
                                            'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
                                            'Samoa' => 'Samoa',
                                            'San Marino' => 'San Marino',
                                            'Sao Tome and Principe' => 'Sao Tome and Principe',
                                            'Saudi Arabia' => 'Saudi Arabia',
                                            'Senegal' => 'Senegal',
                                            'Serbia' => 'Serbia',
                                            'Seychelles' => 'Seychelles',
                                            'Sierra Leone' => 'Sierra Leone',
                                            'Singapore' => 'Singapore',
                                            'Slovakia' => 'Slovakia',
                                            'Slovenia' => 'Slovenia',
                                            'Solomon Islands' => 'Solomon Islands',
                                            'Somalia' => 'Somalia',
                                            'South Africa' => 'South Africa',
                                            'South Sudan' => 'South Sudan',
                                            'Spain' => 'Spain',
                                            'Sri Lanka' => 'Sri Lanka',
                                            'Sudan' => 'Sudan',
                                            'Suriname' => 'Suriname',
                                            'Sweden' => 'Sweden',
                                            'Switzerland' => 'Switzerland',
                                            'Syrian Arab Republic' => 'Syria',
                                            'Taiwan' => 'Taiwan',
                                            'Tajikistan' => 'Tajikistan',
                                            'Tanzania (United Republic of)' => 'Tanzania',
                                            'Thailand' => 'Thailand',
                                            'Timor-Leste' => 'Timor-Leste',
                                            'Togo' => 'Togo',
                                            'Tonga' => 'Tonga',
                                            'Trinidad and Tobago' => 'Trinidad and Tobago',
                                            'Tunisia' => 'Tunisia',
                                            'Turkey' => 'Turkey',
                                            'Turkmenistan' => 'Turkmenistan',
                                            'Tuvalu' => 'Tuvalu',
                                            'Uganda' => 'Uganda',
                                            'Ukraine' => 'Ukraine',
                                            'United Arab Emirates' => 'United Arab Emirates',
                                            'United Kingdom of Great Britain and Northern Ireland' => 'United Kingdom',
                                            'United States of America' => 'United States',
                                            'Uruguay' => 'Uruguay',
                                            'Uzbekistan' => 'Uzbekistan',
                                            'Vanuatu' => 'Vanuatu',
                                            'Venezuela' => 'Venezuela',
                                            'Viet Nam' => 'Vietnam',
                                            'Yemen' => 'Yemen',
                                            'Zambia' => 'Zambia',
                                            'Zimbabwe' => 'Zimbabwe',
                                        ];
                                    @endphp
                                    @foreach($countries as $value => $label)
                                        <option value="{{ $value }}" {{ strtolower(trim($value)) == $userCountry ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a country</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label class="col-form-label">Username</label>
                        </div>
                        <div class="col-lg">
                            <input type="text" class="form-control" value="{{ Auth::user()->username }}" name="username" readonly>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary">
                            <div class="spinner-border spinner-border-sm" role="status" style="display: none;"></div>
                            <span>Save changes</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('updateprofileform').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const submitButton = this.querySelector('button[type="submit"]');
        const spinner = submitButton.querySelector('.spinner-border');
        const buttonTextSpan = submitButton.querySelector('span'); // Target the span for text

        // Show spinner and disable button
        spinner.style.display = 'inline-block';
        buttonTextSpan.textContent = ' Saving...';
        submitButton.disabled = true;

        $.ajax({
            url: "{{ route('profile.update') }}",
            type: 'POST',
            data: $('#updateprofileform').serialize(),
            success: function(response) {
                // Hide spinner and re-enable button
                spinner.style.display = 'none';
                buttonTextSpan.textContent = 'Save changes';
                submitButton.disabled = false;

                if (response.status === 200) {
                    $.notify({
                        icon: 'flaticon-alarm-1',
                        title: 'Success',
                        message: response.success,
                    }, {
                        type: 'success',
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                    });
                } else {
                    // Handle non-200 status as an error as well
                    $.notify({
                        icon: 'flaticon-error',
                        title: 'Error',
                        message: response.error || 'An unexpected error occurred.',
                    }, {
                        type: 'danger',
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Hide spinner and re-enable button
                spinner.style.display = 'none';
                buttonTextSpan.textContent = 'Save changes';
                submitButton.disabled = false;

                console.error("AJAX error:", textStatus, errorThrown, jqXHR);
                let errorMessage = 'An unexpected error occurred. Please try again.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message;
                } else if (jqXHR.responseText) {
                    errorMessage = jqXHR.responseText.substring(0, 100) + '...'; // Show first 100 chars
                }

                $.notify({
                    icon: 'flaticon-error',
                    title: 'Error',
                    message: errorMessage,
                }, {
                    type: 'danger',
                    allow_dismiss: true,
                    newest_on_top: false,
                    showProgressbar: true,
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: null,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                });
            },
        });
    });
</script>