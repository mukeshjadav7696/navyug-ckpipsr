  <article class="has-background-light p-4">
      <div class="columns">
          <div class="column is-2">
              @if ($staff->photo)
                  <figure class="image">
                      <img class="panel" src="{{ $staff->photo }}" style="max-width: 128px;">
                  </figure>
              @endif
          </div>
          <div class="column">
              <div class="is-flex is-align-items-baseline mb-4">
                  <span class="is-size-4 has-text-info">
                      {{ $staff->name }}
                      @if ($staff->additional_role)
                          <br />
                          <span class="subtitle has-text-grey">
                              {{ $staff->additional_role }}
                          </span>
                      @endif
                  </span>
                  <span class="tags has-addons ml-4">
                      <span class="tag is-dark">
                          <i class="fas fa-at"></i>
                      </span>
                      <span class="tag is-warning">{{ $staff->short_name }}</span>
                  </span>
              </div>
              <div class="columns is-multiline">
                  <div class="column is-3">
                      <span class="has-text-grey">Department</span>
                      <br />
                      <span class="has-text-primary has-text-weight-bold">{{ $staff->department }}</span>
                  </div>
                  <div class="column is-3">
                      <span class="has-text-grey">Designation</span>
                      <br />
                      <span class="has-text-primary has-text-weight-bold">{{ $staff->designation }}</span>
                  </div>
                  <div class="column is-3">
                      <span class="has-text-grey">Qualification</span>
                      <br />
                      <span class="has-text-primary has-text-weight-bold">{{ $staff->qualification }}</span>
                  </div>
                  <div class="column is-3">
                      <span class="has-text-grey">Experience</span>
                      <br />
                      <span class="has-text-primary has-text-weight-bold">{{ $staff->experience }}</span>
                  </div>
              </div>
              <div class="columns content is-multiline">
                  @if ($staff->profile)
                      <div class="column is-12">
                          <p class="heading">Profile</p>
                          <blockquote>
                              {{ $staff->profile }}
                          </blockquote>
                      </div>
                  @endif
                  @if ($staff->achievements)
                      <div class="column is-12">
                          <p class="heading">Achivements</p>
                          <blockquote>
                              {{ $staff->achievements }}
                          </blockquote>
                      </div>
                  @endif
              </div>
          </div>
      </div>
      <div class="columns">
          <div class="column is-4">
              <x-info label="Email" :value="$staff->email"></x-info>
          </div>
          <div class="column is-2">
              <x-info label="Contact No" :value="$staff->contact_no"></x-info>
          </div>
          @php
              $keys = ['website', 'resume'];
          @endphp
          @foreach ($keys as $key)
              @if ($staff->$key)
                  <div class="column is-3">
                      <x-info label="{{ Str::title($key) }}" :value="$staff->$key">
                      </x-info>
                  </div>
              @endif
          @endforeach
      </div>
      <div class="columns">
          @php
              $keys = ['facebook', 'linkedin', 'twitter'];
          @endphp
          @foreach ($keys as $key)
              @if ($staff->$key)
                  <div class="column is-4">
                      <x-info label="{{ Str::title($key) }}" :value="$staff->$key">
                      </x-info>
                  </div>
              @endif
          @endforeach
      </div>
  </article>
