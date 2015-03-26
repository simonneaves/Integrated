<?php

namespace Laracasts\Integrated;

interface InteractingEmulator
{
    /**
     * Assert that an alert box is displayed, and contains the given text.
     *
     * @param  string  $text
     * @param  boolean $accept
     * @return
     */
    public function seeInAlert();

    /**
     * Accept an alert.
     *
     * @return self
     */
    public function acceptAlert();

    /**
     * Take a snapshot of the current page.
     *
     * @param  string|null $destination
     * @return self
     */
    public function snap($destination = null);

    /**
     * Continuously poll the page, until you find an element
     * with the given name or id.
     *
     * @param  string  $element
     * @param  integer $timeout
     * @return self
     */
    public function waitForElement($element, $timeout = 5000);
}
