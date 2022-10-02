@component('email.indicator', ['status' => 'success'])
	Your application is installed.
@endcomponent

@component('mail::message')
{{-- Body --}}
# Howdy!

{{ $appname }} has been successfully installed on {{ $uri }}!

## Store Login
You can access the Store at [{{$proto}}{{$uri}}{{LithiumHosting\WebApps\PrestaShop\Handler::ADMIN_PATH}}]({{$proto}}{{$uri}}{{LithiumHosting\WebApps\PrestaShop\Handler::ADMIN_PATH}}) using the following information:

**Login**: <code>{{$adminuser}}</code><br/>
**Password**: <code>{{ str_replace('@', '\\@', $adminpassword) }}</code>

If you wish to further configure {{ $appname }}, please refer to [the official documentation](https://help-center.prestashop.com/en).

---

Security is important with any application, so extra steps are taken to reduce
the risk of hackers. By default **Maximum** Fortification is enabled. This will
work for most people, but if you run into any problems change Fortification to
**Minimum**.

Here's how to do it:

1. Visit **Web** > **Web Apps** in {{PANEL_BRAND}}
2. Select {{ $appname }} installed under **{{$uri}}**
3. Select **Fortification (MIN)** under _Actions_

You can learn more about [Fortification technology]({{MISC_KB_BASE}}/control-panel/understanding-fortification/) within the [knowledgebase]({{MISC_KB_BASE}}).

@include('email.webapps.common-footer')
@endcomponent