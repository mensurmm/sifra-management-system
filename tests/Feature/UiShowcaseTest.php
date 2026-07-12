<?php

test('ui showcase page renders successfully', function () {
    $response = $this->get('/ui-test');

    $response->assertStatus(200);
    $response->assertSee('UI Showcase');
    $response->assertSee('Component Gallery');
});
