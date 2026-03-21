@props(['chirp'])
<div class="card bg-base-100 shadow">
<div class="card-body">
<div class="flex space-x-3">
@if($chirp->user)
<div class="avatar">
<div class="size-10 rounded-full">
<img src="<https://avatars.laravel.cloud/>{{ urlencode($chirp->user->email) }}"
alt="{{ $chirp->user->name }}'s avatar"
class="rounded-full" />
</div>
</div>
@else
<div class="avatar placeholder">
<div class="size-10 rounded-full">
<img src="<https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth>"
alt="Anonymous User"
class="rounded-full" />
</div>
</div>
@endif
        &lt;div class="min-w-0"&gt;
            &lt;div class="flex items-center gap-1"&gt;
                &lt;span class="text-sm font-semibold"&gt;{{ $chirp-&gt;user ? $chirp-&gt;user-&gt;name : 'Anonymous' }}&lt;/span&gt;
                &lt;span class="text-base-content/60"&gt;·&lt;/span&gt;
                &lt;span class="text-sm text-base-content/60"&gt;{{ $chirp-&gt;created_at-&gt;diffForHumans() }}&lt;/span&gt;
            &lt;/div&gt;

            &lt;p class="mt-1"&gt;
                {{ $chirp-&gt;message }}
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;