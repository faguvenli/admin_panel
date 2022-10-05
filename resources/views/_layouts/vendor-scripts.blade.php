<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/plugins/buttons/buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-confirm/jquery-confirm.min.js') }}"></script>

@yield('script')

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js')}}"></script>

<script src="{{ asset('assets/libs/trumbowyg/trumbowyg.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/cleanpaste/cleanpaste.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/history/history.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/indent/indent.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/pasteimage/pasteimage.min.js') }}"></script>
<!-- Import Trumbowyg plugins... -->
<script src="{{ asset('assets/libs/trumbowyg/plugins/resizimg/resizimg.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/table/table.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/upload/upload.min.js') }}"></script>
<script src="{{ asset('assets/libs/trumbowyg/plugins/colors/colors.min.js') }}"></script>
@yield('script-bottom')

@stack('stacked_scripts')
