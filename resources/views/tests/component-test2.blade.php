<x-tests.app>
    <x-slot name="header">ヘッダー２</x-slot>
コンポーネントテスト２
    <x-test-class-base classBaseMessage="メッセージです"></x-test-class-base>
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値からの変更"></x-test-class-base>
</x-tests.app>