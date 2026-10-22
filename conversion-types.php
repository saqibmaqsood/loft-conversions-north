<?php
$pageTitle = "Loft Conversion Types & Architectural Styles — Loft Conversions North";
$pageDesc = "Compare all five architectural loft conversion styles: Velux, rear dormer, hip-to-gable, hip-end dormer and wrap around. Precision engineering for Northern properties.";
$activePage = "types";
$ogImage = "images/another-area-loft-conversions-north-west-england-01.jpeg";

$schemaJson = json_encode([
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "Loft conversion types",
    "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Velux loft conversion", "url" => "/velux-conversion.php"],
        ["@type" => "ListItem", "position" => 2, "name" => "Rear dormer loft conversion", "url" => "/rear-dormer-conversion.php"],
        ["@type" => "ListItem", "position" => 3, "name" => "Hip-to-gable loft conversion", "url" => "/hip-to-gable-conversion.php"],
        ["@type" => "ListItem", "position" => 4, "name" => "Hip-end dormer loft conversion", "url" => "/hip-end-dormer-conversion.php"],
        ["@type" => "ListItem", "position" => 5, "name" => "Wrap around loft conversion", "url" => "/wrap-around-conversion.php"]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$comparisonRows = [
    [
        'name' => 'Velux', 'price' => '6–8 weeks on site', 'weeks' => '6–8 weeks', 'area' => 'Existing footprint',
        'planning' => 'Rarely needed', 'ok' => true, 'suits' => 'Properties with 2.2m+ natural apex clearance', 'href' => 'velux-conversion.php'
    ],
    [
        'name' => 'Rear Dormer', 'price' => '8 weeks on site', 'weeks' => '8 weeks', 'area' => '28–32 m²',
        'planning' => 'Rarely needed', 'ok' => true, 'suits' => 'Mid-terraces and semi-detached homes seeking maximum standing volume', 'href' => 'rear-dormer-conversion.php'
    ],
    [
        'name' => 'Hip-to-Gable', 'price' => '8–10 weeks on site', 'weeks' => '8–10 weeks', 'area' => '25–28 m²',
        'planning' => 'Rarely needed', 'ok' => true, 'suits' => '1930s semis, detached houses and hipped end-terraces', 'href' => 'hip-to-gable-conversion.php'
    ],
    [
        'name' => 'Hip-End Dormer', 'price' => '6–8 weeks on site', 'weeks' => '6–8 weeks', 'area' => '24–28 m²',
        'planning' => 'Sometimes', 'ok' => true, 'suits' => 'Hipped properties where preserving the street profile is priority', 'href' => 'hip-end-dormer-conversion.php'
    ],
    [
        'name' => 'Wrap Around', 'price' => '8–10 weeks on site', 'weeks' => '8–10 weeks', 'area' => '40–46 m²',
        'planning' => 'Often needed', 'ok' => false, 'suits' => 'Larger semis and period additions requiring multi-room family suites', 'href' => 'wrap-around-conversion.php'
    ]
];

$detailedTypes = [
    [
        'num' => '01', 'name' => 'Velux', 'price' => '6–8 weeks on site', 'href' => 'velux-conversion.php',
        'glyph' => 'M6 30V15L24 4l18 11v15zM17 12l6 4M15 15l6 4',
        'meta' => '6–8 weeks on site',
        'body' => 'Flush-mounted rooflights are installed directly into your current pitch without modifying the existing roofline. As our fastest turnaround build, this option delivers substantial daylight and ventilation with minimal planning constraints.',
        'points' => [
            'Requires at least 2.2m clear height from floor joists to ridge apex (2.2m on modern trussed roofs)',
            'Retains the atmospheric sloping eaves, creating a characterful bedroom, studio, or private home office',
            'Classed as Permitted Development across almost all local councils in Greater Manchester, Lancashire, and Cheshire'
        ]
    ],
    [
        'num' => '02', 'name' => 'Rear Dormer', 'price' => '8 weeks on site', 'href' => 'rear-dormer-conversion.php',
        'glyph' => 'M6 30V15L24 4l18 11v15zM16 30v-12h16v12M16 18h16',
        'meta' => '8 weeks · 28–32 m²',
        'body' => 'An engineered vertical box structure extended across the rear roof slope. This design maximizes usable floor space by providing vertical walls and standard ceiling heights where pitched eaves would normally restrict movement.',
        'points' => [
            'The premier architectural choice for Victorian and Edwardian terraced properties without side roof slopes',
            'Positioned with a 200mm setback from eaves to adhere strictly to national Permitted Development guidelines',
            'Engineered steel beams and full Building Regulations certification included'
        ]
    ],
    [
        'num' => '03', 'name' => 'Hip-to-Gable', 'price' => '8–10 weeks on site', 'href' => 'hip-to-gable-conversion.php',
        'glyph' => 'M4 30V13h16L34 5l6 4v21zM4 13h16V30',
        'meta' => '8–10 weeks · 25–28 m²',
        'body' => 'The sloping hipped side roof is extended vertically into a robust gable wall. Beyond adding interior floor area, this structural alteration provides the essential headspace required to position a compliant, comfortable permanent staircase.',
        'points' => [
            'Engineered specifically for properties featuring sloping hipped roof profiles',
            'Exterior gable finishes carefully matched in brickwork, render, or slate to mirror your original construction',
            'Frequently paired with a rear dormer to create our popular wrap-around master suite configuration'
        ]
    ],
    [
        'num' => '04', 'name' => 'Hip-End Dormer', 'price' => '6–8 weeks on site', 'href' => 'hip-end-dormer-conversion.php',
        'glyph' => 'M6 30l6-14h24l6 14zM16 30v-8h12v8M16 22h12',
        'meta' => '6–8 weeks · 24–28 m²',
        'body' => 'A discreet dormer extension built into the hip end rather than the main rear slope. It offers an elegant balance: securing generous internal headroom while keeping the original architectural silhouette intact.',
        'points' => [
            'Dormer cheeks clad in high-grade hanging slates or tiles matching your existing roof covering',
            'A smart architectural alternative when rear roof space is constrained or overlooked',
            'Ideal for suburban residential streets where preserving exterior symmetry is valued'
        ]
    ],
    [
        'num' => '05', 'name' => 'Wrap Around', 'price' => '8–10 weeks on site', 'href' => 'wrap-around-conversion.php',
        'glyph' => 'M4 30V12h14L32 4l8 5v21zM4 12h14v18M18 30v-9h14v9',
        'meta' => '8–10 weeks · 40–46 m²',
        'body' => 'A dual-aspect extension integrating a hip-to-gable elevation with an expansive rear box dormer. This configuration represents our largest conversion footprint, easily providing two double bedrooms and a luxury bathroom.',
        'points' => [
            'Generates 40–46 m² of premium new living space &mdash; effectively a full new storey',
            'Allows expansive glazing, Juliet balconies, and generous en-suite bathroom layouts',
            '8 to 10 weeks on site, and the most technical build of the five'
        ]
    ]
];

include 'includes/header.php';
?>

  <main>

    <!-- Hero Section with Quick Booking Widget -->
    <section aria-labelledby="c-h" class="border-bottom">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(340px,1fr));max-width:1280px;margin:0 auto;align-items:stretch">
        <div style="padding:clamp(26px,3.6vw,52px) 20px clamp(30px,3.6vw,52px);display:flex;flex-direction:column;justify-content:center;gap:18px">
          
          <!-- Embedded Breadcrumb & Badge -->
          <div style="display:flex;flex-wrap:wrap;align-items:center;gap:10px">
            <nav aria-label="Breadcrumb" class="breadcrumb-inline">
              <a href="index.php">Home</a>
              <span class="crumb-sep">/</span>
              <span class="crumb-current" aria-current="page">Conversion Types</span>
            </nav>
            <span style="color:#D4D4CC;font-size:12px">•</span>
            <span style="font-family:var(--font-sans);display:inline-flex;align-items:center;gap:6px;background:#F0F7FD;border:1px solid #CDE4F7;padding:3px 10px;border-radius:14px;color:#0C3B61;font-size:11px;font-weight:700;letter-spacing:.05em;text-transform:uppercase">
              <span style="width:5px;height:5px;border-radius:50%;background:#1B75BC;display:inline-block"></span>
              All 6 Types Compared
            </span>
          </div>

          <h1 id="c-h" class="heading-h1" style="font-size:clamp(34px,5.4vw,56px);letter-spacing:-.025em;margin:0">Loft Conversion Types</h1>
          <p style="font-family:Newsreader,Georgia,serif;font-weight:400;font-size:clamp(20px,2.4vw,25px);line-height:1.25;color:#135284;margin:-4px 0 2px;letter-spacing:-.015em">Six ways up. Your roof rules out four of them.</p>
          <p class="lead-text" style="max-width:46ch">Every loft conversion is one of these six. Which ones are actually available to you comes down to your ridge height, whether your roof has a hip, and how much permitted development volume you have left. Our team provides fixed-price conversions across the North West.</p>
          
          <!-- Key Stats / Numbers Grid on Left -->
          <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:#E4E4DF;border:1px solid #E4E4DF;max-width:440px;border-radius:3px;overflow:hidden">
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">6–8 Weeks</span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.09em;text-transform:uppercase;color:#6B6B6B">Fastest build</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">10–12 Weeks</span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.09em;text-transform:uppercase;color:#6B6B6B">Largest build</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">46 m²</span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.09em;text-transform:uppercase;color:#6B6B6B">Largest option</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">40–50m³</span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.09em;text-transform:uppercase;color:#6B6B6B">PD volume limit</span>
            </div>
          </div>

          <div class="hero-actions-row" style="margin-top:4px">
            <a href="tel:01614100155" class="btn-primary hero-btn">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 16.9v2.6a1.7 1.7 0 0 1-1.9 1.7 16.6 16.6 0 0 1-7.2-2.6 16.3 16.3 0 0 1-5-5A16.6 16.6 0 0 1 4.3 6.4 1.7 1.7 0 0 1 6 4.5h2.6a1.7 1.7 0 0 1 1.7 1.5c.1.9.3 1.7.6 2.5a1.7 1.7 0 0 1-.4 1.8l-1.1 1.1a13.4 13.4 0 0 0 5 5l1.1-1.1a1.7 1.7 0 0 1 1.8-.4c.8.3 1.6.5 2.5.6a1.7 1.7 0 0 1 1.5 1.7z"></path></svg>
              <span>0161 4100155</span>
            </a>
            <a href="#booking" data-open-booking class="btn-secondary hero-btn">
              <span>Book free survey</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#1B75BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15M13 6l6 6-6 6"></path></svg>
            </a>
          </div>
          <div style="display:flex;flex-wrap:wrap;gap:6px 14px;font-family:var(--font-sans);font-size:12.5px;font-weight:500;color:#6B6B6B">
            <span>No obligation</span><span>&middot;</span><span>Guaranteed quote</span><span>&middot;</span><span>400+ finished lofts</span>
          </div>
        </div>

        <!-- Inline Step 1 Widget -->
        <div style="background:#FFFFFF;border-left:1px solid #EDEDE8;display:flex;flex-direction:column">
          <div style="flex:1 1 auto;display:flex;flex-direction:column;background:#FFFFFF">
            <div style="padding:26px 26px 20px;border-bottom:1px solid #EDEDE8">
              <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px;margin-bottom:8px">
                <span class="section-label">Free survey booking</span>
                <span style="font-family:'IBM Plex Mono',monospace;font-size:12px;color:#6B6B6B;white-space:nowrap">Step 1 / 3</span>
              </div>
              <h2 style="font-family:Newsreader,Georgia,serif;font-weight:400;font-size:clamp(22px,2.3vw,28px);line-height:1.14;letter-spacing:-.01em;margin:0">Book your free survey</h2>
            </div>
            <div style="height:3px;background:#EDEDE8"><div style="height:3px;background:#1B75BC;width:33%"></div></div>
            <div style="flex:1 1 auto;padding:26px;display:flex;flex-direction:column">
              <p style="font-size:15px;line-height:1.6;color:#6B6B6B;margin:0 0 18px">What kind of property is it? This tells us which conversion types are possible before we visit.</p>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:18px">
                <button type="button" class="property-opt-btn" data-property="Terrace">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V14l10-8 10 8v16M24 30V14l10-8 10 8v16M14 30v-8h10v8"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Terrace</div>
                  <div style="font-family:'IBM Plex Mono',monospace;font-size:11px;color:#6B6B6B;margin-top:3px">40m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Semi-detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V13l12-9 12 9v17M20 30V13M14 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Semi-detached</div>
                  <div style="font-family:'IBM Plex Mono',monospace;font-size:11px;color:#6B6B6B;margin-top:3px">Most common</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V14l16-10 16 10v16zM19 30v-8h10v8"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Detached</div>
                  <div style="font-family:'IBM Plex Mono',monospace;font-size:11px;color:#6B6B6B;margin-top:3px">50m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Bungalow">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V18l20-12 20 12v12zM18 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Bungalow</div>
                  <div style="font-family:'IBM Plex Mono',monospace;font-size:11px;color:#6B6B6B;margin-top:3px">Dormer options</div>
                </button>
              </div>
              <label style="display:block;margin-bottom:18px">
                <span style="display:block;font-size:13px;font-weight:600;letter-spacing:.02em;margin-bottom:8px">Postcode</span>
                <input type="text" id="heroPostcode" placeholder="e.g. M1 1AD" autocomplete="postal-code" style="width:100%;padding:14px 16px;font-size:16px;border:1px solid #DCDCD6;border-radius:3px;background:#FAFAF8;color:#1A1A1A;box-sizing:border-box">
              </label>
              <button type="button" id="heroContinue" class="btn-primary" style="width:100%">Continue</button>
              <div id="heroError" style="font-size:13px;color:#B4423A;margin-top:10px;min-height:18px"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Side-by-Side Comparison Table Section -->
    <section id="compare" data-reveal aria-labelledby="cmp-h" class="section-padding-sm bg-gray border-bottom">
      <div class="container">
        <div style="display:flex;flex-wrap:wrap;gap:18px 48px;align-items:flex-end;justify-content:space-between;margin-bottom:28px">
          <div style="flex:2 1 380px">
            <span class="section-label">At a glance</span>
            <h2 id="cmp-h" class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 0">All five, side by side.</h2>
          </div>
          <div class="cmp-header-actions">
            <p style="flex:1 1 260px;max-width:34ch;font-size:15px;line-height:1.6;color:#6B6B6B;margin:0">Timelines and floor areas are typical for North West houses. Exact fixed quote given on survey.</p>
            <div class="cmp-carousel-nav" aria-label="Carousel navigation">
              <button type="button" class="cmp-prev-btn" aria-label="Previous conversion type">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
              </button>
              <button type="button" class="cmp-next-btn" aria-label="Next conversion type">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Desktop Comparison Table (Visible >768px) -->
        <div class="cmp-table-desktop" style="background:#FFFFFF;border:1px solid #E4E4DF;border-radius:3px;overflow:hidden">
          <div style="display:grid;grid-template-columns:1.3fr .8fr .7fr .8fr .9fr 1.6fr;gap:16px;padding:14px 22px;background:#FAFAF8;border-bottom:1px solid #E4E4DF;font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:#6B6B6B">
            <span>Type</span>
            <span>Timeline</span>
            <span>On site</span>
            <span>Floor area</span>
            <span>Planning</span>
            <span>Suits</span>
          </div>
          <?php foreach ($comparisonRows as $idx => $r): ?>
            <a href="<?php echo $r['href']; ?>" style="display:grid;grid-template-columns:1.3fr .8fr .7fr .8fr .9fr 1.6fr;gap:16px;align-items:center;padding:18px 22px;text-decoration:none;color:#1A1A1A;transition:background .2s;<?php if ($idx < count($comparisonRows) - 1) echo 'border-bottom:1px solid #EDEDE8;'; ?>" onmouseover="this.style.background='#F0F7FD'" onmouseout="this.style.background='#FFFFFF'">
              <span style="font-family:Newsreader,Georgia,serif;font-size:19px;line-height:1.2;color:#1A1A1A"><?php echo $r['name']; ?></span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:13px;color:#135284;font-weight:500"><?php echo $r['price']; ?></span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:13px;color:#6B6B6B"><?php echo $r['weeks']; ?></span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:13px;color:#6B6B6B"><?php echo $r['area']; ?></span>
              <span style="font-family:'IBM Plex Mono',monospace;font-size:13px;color:<?php echo $r['ok'] ? '#135284' : '#A0662F'; ?>;white-space:nowrap"><?php echo $r['planning']; ?></span>
              <span style="font-size:13px;line-height:1.5;color:#6B6B6B"><?php echo $r['suits']; ?></span>
            </a>
          <?php endforeach; ?>
        </div>

        <!-- Mobile Comparison Carousel (Visible <=768px) -->
        <div class="cmp-cards-mobile">
          <?php foreach ($comparisonRows as $r): ?>
            <a href="<?php echo $r['href']; ?>" class="cmp-mobile-card">
              <div>
                <div class="cmp-card-header">
                  <h3 class="cmp-card-title"><?php echo $r['name']; ?></h3>
                  <span class="cmp-planning-badge <?php echo $r['ok'] ? 'badge-ok' : 'badge-warn'; ?>">
                    <?php echo ($r['ok'] ? '✓ ' : '⚠ ') . $r['planning']; ?>
                  </span>
                </div>
                <div class="cmp-card-stats" style="margin-top:12px">
                  <div class="cmp-stat-box">
                    <span class="cmp-stat-label">Timeline</span>
                    <span class="cmp-stat-val text-accent"><?php echo $r['price']; ?></span>
                  </div>
                  <div class="cmp-stat-box">
                    <span class="cmp-stat-label">Floor Area</span>
                    <span class="cmp-stat-val"><?php echo $r['area']; ?></span>
                  </div>
                </div>
                <div class="cmp-card-suits" style="margin-top:12px">
                  <span class="cmp-suits-label">Suits:</span>
                  <span class="cmp-suits-text"><?php echo $r['suits']; ?></span>
                </div>
              </div>
              <div class="cmp-card-footer">
                <span>Explore <?php echo $r['name']; ?> conversion</span>
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- In Detail Grid -->
    <section data-reveal aria-labelledby="detail-h" class="section-padding-sm bg-white">
      <div class="container">
        <div class="detail-header-row" style="margin-bottom:32px">
          <div>
            <span class="section-label">In detail</span>
            <h2 id="detail-h" class="heading-h2" style="font-size:clamp(26px,4vw,44px);margin:12px 0 0">What each one actually is.</h2>
          </div>
          <div class="detail-carousel-nav" aria-label="Carousel navigation">
            <button type="button" class="detail-prev-btn" aria-label="Previous detail card">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button type="button" class="detail-next-btn" aria-label="Next detail card">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
        </div>
        <div class="detail-types-grid">
          <?php foreach ($detailedTypes as $t): ?>
            <article class="detail-type-card">
              <div>
                <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:12px">
                  <div style="display:flex;gap:14px;align-items:flex-start">
                    <span style="flex:0 0 auto;width:54px;height:42px;display:flex;align-items:center;justify-content:center;background:#F5F5F3;border:1px solid #EDEDE8;border-radius:4px">
                      <svg viewBox="0 0 48 32" width="36" height="24" fill="none" stroke="#135284" stroke-width="1.4" stroke-linejoin="round" aria-hidden="true"><path d="<?php echo $t['glyph']; ?>"></path></svg>
                    </span>
                    <div style="min-width:0">
                      <h3 style="font-family:Newsreader,Georgia,serif;font-weight:400;font-size:clamp(21px,2.4vw,28px);line-height:1.15;letter-spacing:-.02em;margin:0;color:#1A1A1A"><?php echo $t['name']; ?></h3>
                      <div style="display:flex;flex-wrap:wrap;gap:4px 10px;margin-top:4px;font-family:var(--font-sans);font-size:12.5px;font-weight:600">
                        <span style="color:#135284"><?php echo $t['price']; ?></span>
                        <span style="color:#B8BCB2">•</span>
                        <span style="color:#6B6B6B"><?php echo $t['meta']; ?></span>
                      </div>
                    </div>
                  </div>
                  <span class="detail-card-num"><?php echo $t['num']; ?></span>
                </div>
                <p style="font-size:15px;line-height:1.6;color:#4A4A45;margin:16px 0 0;max-width:62ch;text-wrap:pretty"><?php echo $t['body']; ?></p>
                <ul style="list-style:none;margin:16px 0 0;padding:0;display:grid;gap:9px;border-top:1px solid #EDEDE8;padding-top:14px">
                  <?php foreach ($t['points'] as $pt): ?>
                    <li style="display:flex;gap:10px;align-items:flex-start;font-size:13.5px;line-height:1.5;color:#1A1A1A">
                      <span style="width:6px;height:6px;flex:0 0 6px;margin-top:7px;border-radius:50%;background:#1B75BC"></span>
                      <span><?php echo $pt; ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <a href="<?php echo $t['href']; ?>" class="detail-btn" style="border:1px solid #1B75BC;color:#135284;font-size:13.5px;font-weight:600;border-radius:4px;padding:11px 18px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .2s ease" onmouseover="this.style.background='#1B75BC';this.style.color='#FFFFFF'" onmouseout="this.style.background='transparent';this.style.color='#135284'">
                <span><?php echo $t['name']; ?> in detail</span>
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Narrowing It Down (Questions) -->
    <section data-reveal aria-labelledby="pick-h" class="section-padding-sm bg-dark">
      <div class="container">
        <div class="qa-header-row" style="display:flex;flex-wrap:wrap;gap:18px 48px;align-items:flex-end;justify-content:space-between;margin-bottom:34px">
          <div style="flex:2 1 400px">
            <span class="section-label-light">Narrowing it down</span>
            <h2 id="pick-h" class="heading-h2" style="color:#FFFFFF;max-width:22ch;margin:12px 0 0">Four questions decide it.</h2>
          </div>
          <div class="qa-header-actions" style="display:flex;align-items:center;gap:12px">
            <p style="flex:1 1 280px;max-width:34ch;font-size:15px;line-height:1.65;color:#B8B8B0;margin:0">You can answer three of these yourself. The fourth needs a tape measure, which is what the survey is for.</p>
            <div class="qa-carousel-nav" aria-label="Carousel navigation">
              <button type="button" class="qa-prev-btn" aria-label="Previous question">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
              </button>
              <button type="button" class="qa-next-btn" aria-label="Next question">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="qa-cards-grid">
          <div class="dark-qa-card">
            <div>
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;letter-spacing:.08em;color:#1B75BC">QUESTION 01</span>
                <span style="width:6px;height:6px;border-radius:50%;background:#1B75BC"></span>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.2;color:#FFFFFF;font-weight:400;margin:0 0 10px">How tall is your loft?</h3>
              <p style="font-size:14.5px;line-height:1.6;color:#B8B8B0;margin:0">Measure from the ceiling joists to the underside of the ridge. A minimum 2.2m clear height is required; over 2.2m, everything is open.</p>
            </div>
            <div style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8ABFE5;padding-top:12px;border-top:1px solid #2E2E2A">The one that needs a tape measure</div>
          </div>
          <div class="dark-qa-card">
            <div>
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;letter-spacing:.08em;color:#1B75BC">QUESTION 02</span>
                <span style="width:6px;height:6px;border-radius:50%;background:#1B75BC"></span>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.2;color:#FFFFFF;font-weight:400;margin:0 0 10px">Does your roof have a hip?</h3>
              <p style="font-size:14.5px;line-height:1.6;color:#B8B8B0;margin:0">A hip slopes on the side as well as front and back. If yours does, hip-to-gable, hip-end dormer and wrap around are all available. A mid-terrace has none.</p>
            </div>
            <div style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8ABFE5;padding-top:12px;border-top:1px solid #2E2E2A">Look at it from the street</div>
          </div>
          <div class="dark-qa-card">
            <div>
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;letter-spacing:.08em;color:#1B75BC">QUESTION 03</span>
                <span style="width:6px;height:6px;border-radius:50%;background:#1B75BC"></span>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.2;color:#FFFFFF;font-weight:400;margin:0 0 10px">How much volume is left?</h3>
              <p style="font-size:14.5px;line-height:1.6;color:#B8B8B0;margin:0">Permitted development allows 40m³ on a terrace and 50m³ on a semi or detached — covering every roof enlargement ever made to the house.</p>
            </div>
            <div style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8ABFE5;padding-top:12px;border-top:1px solid #2E2E2A">Previous dormers count against it</div>
          </div>
          <div class="dark-qa-card">
            <div>
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;letter-spacing:.08em;color:#1B75BC">QUESTION 04</span>
                <span style="width:6px;height:6px;border-radius:50%;background:#1B75BC"></span>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.2;color:#FFFFFF;font-weight:400;margin:0 0 10px">What do you need the space for?</h3>
              <p style="font-size:14.5px;line-height:1.6;color:#B8B8B0;margin:0">One bright room is a rooflight conversion. Two bedrooms and a bathroom is a wrap around. Answering this honestly saves more money than anything else.</p>
            </div>
            <div style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8ABFE5;padding-top:12px;border-top:1px solid #2E2E2A">Rooms, not square metres</div>
          </div>
        </div>
      </div>
    </section>

    <!-- By Property Types Grid -->
    <section data-reveal aria-labelledby="prop-h" class="section-padding-sm bg-white">
      <div class="container">
        <div style="display:flex;flex-wrap:wrap;gap:18px 48px;align-items:flex-end;justify-content:space-between;margin-bottom:34px">
          <div style="flex:2 1 400px">
            <span class="section-label">By property</span>
            <h2 id="prop-h" class="heading-h2" style="max-width:24ch;margin:12px 0 0">Or start from the house instead.</h2>
          </div>
          <div class="prop-header-actions" style="display:flex;align-items:center;gap:12px">
            <a href="property-types.php" class="btn-secondary prop-all-btn" style="padding:10px 18px;font-size:14px;font-weight:600;display:inline-flex;align-items:center;gap:6px">
              <span>All property types</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <div class="prop-carousel-nav" aria-label="Carousel navigation">
              <button type="button" class="prop-prev-btn" aria-label="Previous property type">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
              </button>
              <button type="button" class="prop-next-btn" aria-label="Next property type">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="house-types-grid">
          <a href="terrace-property.php" class="house-type-card">
            <div>
              <div style="width:52px;height:36px;display:flex;align-items:center;justify-content:center;background:#F5F5F3;border:1px solid #EDEDE8;border-radius:4px;margin-bottom:14px">
                <svg viewBox="0 0 48 32" width="38" height="24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V14l10-8 10 8v16M24 30V14l10-8 10 8v16M14 30v-8h10v8"></path></svg>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.15;margin:0 0 8px;color:#1A1A1A;font-weight:400">Terrace</h3>
              <p style="font-size:14px;line-height:1.6;color:#6B6B6B;margin:0">No hip to square off and neighbours both sides, so the rear slope does the work.</p>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:6px 12px;padding-top:12px;border-top:1px solid #EDEDE8;font-family:var(--font-sans);font-size:12.5px;font-weight:600">
              <span style="color:#135284">40m³ limit</span>
              <span style="color:#8A8A82">•</span>
              <span style="color:#6B6B6B">Rear dormer</span>
            </div>
          </a>

          <a href="semi-detached-property.php" class="house-type-card">
            <div>
              <div style="width:52px;height:36px;display:flex;align-items:center;justify-content:center;background:#F5F5F3;border:1px solid #EDEDE8;border-radius:4px;margin-bottom:14px">
                <svg viewBox="0 0 48 32" width="38" height="24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V13l12-9 12 9v17M20 30V13M14 30v-7h12v7"></path></svg>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.15;margin:0 0 8px;color:#1A1A1A;font-weight:400">Semi-detached</h3>
              <p style="font-size:14px;line-height:1.6;color:#6B6B6B;margin:0">The most converted house in the North West, and the most flexible.</p>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:6px 12px;padding-top:12px;border-top:1px solid #EDEDE8;font-family:var(--font-sans);font-size:12.5px;font-weight:600">
              <span style="color:#135284">50m³ limit</span>
              <span style="color:#8A8A82">•</span>
              <span style="color:#6B6B6B">Hip-to-gable</span>
            </div>
          </a>

          <a href="detached-property.php" class="house-type-card">
            <div>
              <div style="width:52px;height:36px;display:flex;align-items:center;justify-content:center;background:#F5F5F3;border:1px solid #EDEDE8;border-radius:4px;margin-bottom:14px">
                <svg viewBox="0 0 48 32" width="38" height="24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V14l16-10 16 10v16zM19 30v-8h10v8"></path></svg>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.15;margin:0 0 8px;color:#1A1A1A;font-weight:400">Detached</h3>
              <p style="font-size:14px;line-height:1.6;color:#6B6B6B;margin:0">Hips both sides on standalone plots. The most design freedom of any type.</p>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:6px 12px;padding-top:12px;border-top:1px solid #EDEDE8;font-family:var(--font-sans);font-size:12.5px;font-weight:600">
              <span style="color:#135284">50m³ limit</span>
              <span style="color:#8A8A82">•</span>
              <span style="color:#6B6B6B">Any type</span>
            </div>
          </a>

          <a href="bungalow-property.php" class="house-type-card">
            <div>
              <div style="width:52px;height:36px;display:flex;align-items:center;justify-content:center;background:#F5F5F3;border:1px solid #EDEDE8;border-radius:4px;margin-bottom:14px">
                <svg viewBox="0 0 48 32" width="38" height="24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V18l20-12 20 12v12zM18 30v-7h12v7"></path></svg>
              </div>
              <h3 style="font-family:Newsreader,Georgia,serif;font-size:22px;line-height:1.15;margin:0 0 8px;color:#1A1A1A;font-weight:400">Bungalow</h3>
              <p style="font-size:14px;line-height:1.6;color:#6B6B6B;margin:0">Shallow pitch, so headroom decides. Sometimes the roof comes off.</p>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:6px 12px;padding-top:12px;border-top:1px solid #EDEDE8;font-family:var(--font-sans);font-size:12.5px;font-weight:600">
              <span style="color:#135284">On survey</span>
              <span style="color:#8A8A82">•</span>
              <span style="color:#6B6B6B">Dormer options</span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Inline Booking Section -->
    <section id="booking" data-reveal aria-labelledby="book-h" class="section-padding-sm bg-gray border-top">
      <div class="container-narrow">
        <div style="text-align:center;max-width:52ch;margin:0 auto 34px">
          <span class="section-label">Free survey</span>
          <h2 id="book-h" class="heading-h2" style="margin:12px 0 12px">Still not sure which one?</h2>
          <p style="font-size:17px;line-height:1.6;color:#4A4A45;margin:0">That is the surveyor's job. We measure the roof, price the two or three that are genuinely possible, and tell you which we would choose.</p>
        </div>
        <?php 
          $widgetHeading = "Book your free survey";
          include 'includes/booking-widget.php'; 
        ?>
      </div>
    </section>

    <!-- 41 Service Areas -->
    <?php include 'includes/service-areas.php'; ?>

    <!-- CTA Banner -->
    <section data-reveal aria-labelledby="cta-h" class="section-padding bg-primary cta-banner-section">
      <div class="container cta-banner-grid">
        <div class="cta-banner-content">
          <span class="section-label-subtle">One free visit</span>
          <h2 id="cta-h" class="heading-h1" style="font-size:clamp(34px,5vw,60px);color:#FFFFFF;margin-top:14px">We name the type your roof <em style="font-style:italic">can</em> take.</h2>
          <p style="font-size:18px;line-height:1.6;margin:20px 0 30px;color:#E5F2FC;max-width:42ch">Not the most expensive one. Forty-five minutes, expert layout advice, one fixed price.</p>
          <div class="cta-btn-group">
            <a href="#booking" data-open-booking class="btn-white">Book Free Survey</a>
            <a href="tel:01614100155" class="btn-outline-white">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Call 0161 4100155
            </a>
          </div>
        </div>
        <div class="cta-what-next-card" style="background:#FFFFFF;color:#1A1A1A;border-radius:4px;padding:clamp(22px,3vw,34px)">
          <span class="section-label">What happens next</span>
          <ol style="list-style:none;margin:18px 0 0;padding:0;display:grid;gap:0">
            <li style="display:flex;gap:14px;align-items:flex-start;padding:16px 0;border-bottom:1px solid #EDEDE8">
              <span style="font-family:var(--font-sans);font-size:13px;color:#135284;flex:0 0 26px;padding-top:2px;font-weight:700">01</span>
              <span style="display:flex;flex-direction:column;gap:4px">
                <span style="font-size:16px;font-weight:600;line-height:1.3">The survey</span>
                <span style="font-size:14px;line-height:1.6;color:#6B6B6B">Ridge height, hips, volume already used, staircase route.</span>
              </span>
              <span style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8A8A82;margin-left:auto;white-space:nowrap;padding-top:2px">45 min</span>
            </li>
            <li style="display:flex;gap:14px;align-items:flex-start;padding:16px 0;border-bottom:1px solid #EDEDE8">
              <span style="font-family:var(--font-sans);font-size:13px;color:#135284;flex:0 0 26px;padding-top:2px;font-weight:700">02</span>
              <span style="display:flex;flex-direction:column;gap:4px">
                <span style="font-size:16px;font-weight:600;line-height:1.3">Survey & fixed quote</span>
                <span style="font-size:14px;line-height:1.6;color:#6B6B6B">A detailed written proposal with one guaranteed fixed price.</span>
              </span>
              <span style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8A8A82;margin-left:auto;white-space:nowrap;padding-top:2px">A few days</span>
            </li>
            <li style="display:flex;gap:14px;align-items:flex-start;padding:16px 0">
              <span style="font-family:var(--font-sans);font-size:13px;color:#135284;flex:0 0 26px;padding-top:2px;font-weight:700">03</span>
              <span style="display:flex;flex-direction:column;gap:4px">
                <span style="font-size:16px;font-weight:600;line-height:1.3">You decide</span>
                <span style="font-size:14px;line-height:1.6;color:#6B6B6B">Amend it, sit on it, or book a start date. No chasing from us.</span>
              </span>
              <span style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#8A8A82;margin-left:auto;white-space:nowrap;padding-top:2px">Your call</span>
            </li>
          </ol>
          <p style="margin:20px 0 0;font-size:13px;line-height:1.6;color:#6B6B6B">No obligation, 100% free consultation, and zero pressure to proceed whatever you decide.</p>
        </div>
      </div>
    </section>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let selectedProp = '';
      const propBtns = document.querySelectorAll('.property-opt-btn');
      const errBox = document.getElementById('heroError');
      const pcInput = document.getElementById('heroPostcode');
      const continueBtn = document.getElementById('heroContinue');

      propBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          propBtns.forEach(b => {
            b.classList.remove('active');
            b.removeAttribute('aria-pressed');
          });
          btn.classList.add('active');
          btn.setAttribute('aria-pressed', 'true');
          selectedProp = btn.getAttribute('data-property');
          if (errBox) errBox.textContent = '';
        });
      });

      if (continueBtn) {
        continueBtn.addEventListener('click', () => {
          if (!selectedProp) {
            if (errBox) errBox.textContent = 'Pick your property type to continue.';
            return;
          }
          const pc = pcInput ? pcInput.value.trim() : '';
          if (pc.length < 5) {
            if (errBox) errBox.textContent = 'Enter a full postcode so we can check coverage.';
            return;
          }
          if (errBox) errBox.textContent = '';
          window.dispatchEvent(new CustomEvent('open-booking', {
            detail: { property: selectedProp, postcode: pc }
          }));
        });
      }
    });
  </script>

  <?php include 'includes/booking-modal.php'; ?>
  <?php include 'includes/footer.php'; ?>
