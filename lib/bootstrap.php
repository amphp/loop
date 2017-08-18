<?php

namespace Amp\Loop;

use AsyncInterop\Loop;

\trigger_error(
    "You're using amphp/loop, which is deprecated. Please use amphp/amp instead.",
    E_USER_WARNING
);

Loop::setFactory(new LoopFactory);
