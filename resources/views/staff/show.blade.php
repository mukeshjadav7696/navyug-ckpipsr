  <article class="has-background-light p-4">
      <div class="level">
          <div class="level-left">
              @if ($staff->photo)
                  <div class="level-item">
                      <figure class="image">
                          <img class="panel" src="{{ $staff->photo }}" style="max-width: 128px;">
                      </figure>
                  </div>
              @endif
              <div class="level-item">
                  <p class="title has-text-info">
                      {{ $staff->name }}
                      @if ($staff->additional_role)
                          <br />
                          <span class="subtitle has-text-grey">
                              {{ $staff->additional_role }}
                          </span>
                      @endif
                  </p>
              </div>
          </div>
          <div class="level-right">
              <div class="level-item">
                  <div class="tags has-addons">
                      <span class="tag is-dark">
                          <i class="fas fa-at"></i>
                      </span>
                      <span class="tag is-warning">{{ $staff->short_name }}</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="box is-shadowless">
          <div class="divider">detail</div>
          <div class="columns is-multiline">
              <div class="column is-6">
                  <span class="tags has-addons">
                      <span class="tag">Department</span>
                      <span class="tag is-primary">{{ $staff->department }}</span>
                  </span>
              </div>
              <div class="column is-6">
                  <span class="tags has-addons">
                      <span class="tag">Designation</span>
                      <span class="tag is-primary">{{ $staff->designation }}</span>
                  </span>
              </div>
              <div class="column is-6">
                  <span class="tags has-addons">
                      <span class="tag">Qualification</span>
                      <span class="tag is-primary">{{ $staff->qualification }}</span>
                  </span>
              </div>
              <div class="column is-6">
                  <span class="tags has-addons">
                      <span class="tag">Experience</span>
                      <span class="tag is-primary">{{ $staff->experience }}</span>
                  </span>
              </div>
          </div>
          <div class="columns content">
              <div class="column is-6">
                  <p class="heading">Profile</p>
                  <blockquote>
                      {{ $staff->profile }}
                  </blockquote>
              </div>
              <div class="column is-6">
                  <p class="heading">Achivements</p>
                  <blockquote>
                      {{ $staff->achievements }}
                  </blockquote>
              </div>
          </div>
      </div>
      <div class="columns">
          <div class="column is-4">
              <x-info label="Address" :value="$staff->address"></x-info>
          </div>
          <div class="column is-4">
              <x-info label="Email" :value="$staff->email"></x-info>
          </div>
          <div class="column is-2">
              <x-info label="Contact No" :value="$staff->contact_no"></x-info>
          </div>
      </div>
      <div class="columns">
          @php
              $keys = ['website', 'resume'];
          @endphp
          @foreach ($keys as $key)
              <div class="column is-6">
                  <x-info label="{{ Str::title($key) }}" :value="$staff->$key">
                  </x-info>
              </div>
          @endforeach
      </div>
      <div class="columns">
          @php
              $keys = ['facebook', 'linkedin', 'twitter'];
          @endphp
          @foreach ($keys as $key)
              <div class="column is-4">
                  <x-info label="{{ Str::title($key) }}" :value="$staff->$key">
                  </x-info>
              </div>
          @endforeach
      </div>
  </article>
