<x-filament-tiptap-editor::button
    x-show="tools.includes('align')"
    style="display: none;"
    action="editor().chain().focus().setTextAlign('center').run()"
    active="{ textAlign: 'center' }"
    label="{{ __('filament-tiptap-editor::editor.align_center') }}"
    icon="align-center"
/>