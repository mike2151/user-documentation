<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\GFM\Inlines;

use namespace HH\Lib\Str;

final class Context {
  const keyset<classname<Inline>> ALL_INLINE_TYPES = keyset[
    AutoLink::class,
    AutoLinkExtension::class,
    Link::class,
    HardLineBreak::class,
    SoftLineBreak::class,
    CodeSpan::class,
    DisallowedRawHTMLExtension::class,
    EntityReference::class,
    Image::class,
    Emphasis::class,
    StrikethroughExtension::class,
    RawHTML::class,
    BackslashEscape::class,
    TextualContent::class,
  ];

  protected bool $isHtmlEnabled = false;

  public function enableHTML_UNSAFE(): this {
    $this->isHtmlEnabled = true;
    return $this;
  }

  public function isHTMLEnabled(): bool {
    return $this->isHtmlEnabled;
  }

  public function getInlineTypes(): keyset<classname<Inline>> {
    return self::ALL_INLINE_TYPES;
  }
}
