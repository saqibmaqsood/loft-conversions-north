<?php
$pageTitle = "Velux Loft Conversions & Rooflight Extensions — Loft Conversions North";
$pageDesc = "Bespoke Velux rooflight loft conversions completed in 6 to 8 weeks across Greater Manchester, Lancashire, and Cheshire. Free survey and layout advice across Greater Manchester, Lancashire, Cheshire and Merseyside.";
$activePage = "types";
$ogImage = "images/another-area-loft-conversions-north-west-england-01.jpeg";

$schemaJson = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Velux loft conversion",
    "provider" => [
        "@type" => "LocalBusiness",
        "name" => "Loft Conversions North",
        "telephone" => "0161 4100155"
    ],
    "offers" => [
        "@type" => "Offer",
        "priceCurrency" => "GBP",
        "price" => "24000",
        "priceSpecification" => "from"
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$facts = [
    ['value' => 'Guaranteed Fixed Price', 'label' => 'Fixed price'],
    ['value' => '6–8 weeks', 'label' => 'On site'],
    ['value' => '2.2m', 'label' => 'Min. headroom']
];

$galleryImages = [
    'images/another-area-loft-conversions-north-west-england-03.jpeg',
    'images/another-area-loft-conversions-north-west-england-05.jpeg',
    'images/another-area-loft-conversions-north-west-england-11.jpeg',
    'images/another-area-loft-conversions-north-west-england-17.jpeg',
];

$timeline = [
    ['when' => 'Week 1', 'what' => 'Scaffold up, materials delivered, loft cleared and boarded for safe working.'],
    ['when' => 'Weeks 2–3', 'what' => 'Steels and primary beams in, new deeper floor joists laid over the existing ceiling.'],
    ['when' => 'Weeks 4–5', 'what' => 'Roof upgraded, Velux windows fitted and flashed, Part L insulation installed.'],
    ['when' => 'Weeks 6–7', 'what' => 'Stairwell aperture cut, bespoke staircase fitted, partitions and joinery finished.'],
    ['when' => 'Week 8', 'what' => 'Plastering, second-fix electrics, building control sign-off and handover.']
];

$fit = [
    ['yes' => true, 'text' => '2.2m or more from ceiling joists to the underside of the ridge (2.2m on modern trusses).'],
    ['yes' => true, 'text' => 'You want the shortest, least disruptive build and the lowest fixed price.'],
    ['yes' => true, 'text' => 'The roof shape must stay as it is — conservation area, or you simply prefer it.'],
    ['yes' => false, 'text' => 'You need maximum floor area with full standing height across the room — choose a rear dormer.'],
    ['yes' => false, 'text' => 'The loft has a hipped roof with little usable volume — hip-to-gable is the route.'],
    ['yes' => false, 'text' => 'Headroom is under 2.2m — conversion viability is assessed on survey.']
];

$included = [
    'Structural steels, calculations and engineer’s sign-off',
    'New floor joists laid over the existing ceiling',
    'Two Velux rooflights, fitted and flashed',
    'Bespoke staircase and fire-rated doors to the protected stair',
    'Insulation to current Part L standards',
    'Plasterboard, skim and second-fix electrics',
    'Building Control fees and completion certificate',
    'Scaffolding, waste removal and daily clean-down'
];

$addOns = [
    ['name' => 'En-suite shower room', 'price' => '+ £5,000 – £6,000', 'note' => 'The biggest single step. Cheaper near the existing soil stack; a macerator handles the awkward layouts.'],
    ['name' => 'Extra rooflights', 'price' => 'From £1,200 each', 'note' => 'Supplied and fitted. Integra remote operation or a Cabrio balcony window costs more.'],
    ['name' => 'Fitted eaves storage', 'price' => '+ £950 – £1,800', 'note' => 'Custom timber-framed eaves cupboards and access doors to maximize storage in the lower roof pitch.'],
    ['name' => 'Larger floor area', 'price' => '£24k → £38k', 'note' => 'A 32 m² master-plus-ensuite in a Victorian terrace sits at the top of the rooflight range.'],
    ['name' => 'Upgraded finishes', 'price' => 'Quoted per spec', 'note' => 'Engineered timber floors, fitted eaves storage, feature lighting. Standard spec is included above.']
];

$faqs = [
    ['q' => 'Will our Velux conversion require planning permission?', 'a' => 'In practically all circumstances, no. Because rooflights fit flush into the existing pitch, they fall neatly under standard Permitted Development rights. Key technical criteria: rooflights must not project more than 150mm beyond the roof plane, and any side-facing windows must be frosted and fixed shut below 1.7m. Listed structures and specific conservation orders remain the primary exceptions, which our team verifies during your initial survey.'],
    ['q' => 'What is the minimum head clearance required?', 'a' => 'We look for a minimum clear vertical height of 2.2 metres from the ceiling joists to the apex of the ridge board — 2.2 metres on modern trusses as well. Our surveyor uses digital laser equipment on-site to confirm precise internal dimensions before any commitment.'],
    ['q' => 'How many rooflights will be installed?', 'a' => 'Building standards advise that glazed area equals roughly 10% to 15% of the total floor space. Two well-proportioned rooflights are ideal for a single bedroom or studio. At least one window must comply with means-of-escape regulations, providing an openable area of 0.33m² with a sill height no greater than 1100mm from the finished floor level.'],
    ['q' => 'Which window opening mechanism is best?', 'a' => 'Top-hung rooflights open outward to provide uninterrupted sky views and extra headroom, making them ideal for pitches between 15° and 55°. Centre-pivot models are suited to areas where furniture or desks sit directly below the window. Moisture-resistant polyurethane finishes are recommended for loft shower rooms.'],
    ['q' => 'What stages do Building Control inspectors examine?', 'a' => 'Local council or approved private inspectors conduct mandatory checks on steel support installation, thermal insulation, structural fire stopping, and final stair compliance. Upon satisfactory completion, an official Building Regulations Completion Certificate is issued for your property deeds.'],
    ['q' => 'How do you integrate the new staircase?', 'a' => 'Our bespoke staircases are custom-built to match the timber profile and spindle design of your original ground-floor hall. The flight is carefully positioned to provide at least 2.0m of continuous headroom (with a 1.9m concession under sloped ceilings) to ensure safety and comfort.'],
    ['q' => 'What fire safety regulations apply to loft rooms?', 'a' => 'Adding a habitable loft creates a three-storey home, requiring a protected escape route down the central stairwell. This entails fitting 30-minute fire doors (FD30), installing interlinked mains-powered smoke detectors on every landing, and ensuring escape-compliant glazing.'],
    ['q' => 'How is thermal insulation managed?', 'a' => 'We utilize high-performance rigid PIR insulation boards fitted securely between and beneath the existing rafters. This system exceeds current Part L thermal efficiency standards (achieving a 0.15 U-value) while preserving maximum internal room height.'],
    ['q' => 'Can we include an en-suite bathroom?', 'a' => 'Yes, our plumbers regularly fit compact en-suite shower rooms into Velux conversions. Plumbing is usually connected directly to the primary soil stack, with quiet macerator pump systems installed where layouts require flexible positioning.'],
    ['q' => 'How much equity does a Velux conversion add?', 'a' => 'Independent property valuations across the North West show that a compliant loft bedroom and en-suite typically increases residential market value by 15% to 20%, offering an outstanding return on initial investment.'],
    ['q' => 'Can our family remain in the property throughout the work?', 'a' => 'Yes, completely. Construction materials and workforce enter via external scaffolding through the roof slope for most of the 6 to 8 weeks. Your downstairs living rooms, heating, and plumbing remain fully intact and operational throughout the project.']
];

include 'includes/header.php';
?>

  <main>
    <!-- Hero Section with Quick Booking Widget -->
    <section aria-labelledby="v-h" class="border-bottom">
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(340px,1fr));max-width:1280px;margin:0 auto;align-items:stretch">
        <div style="padding:clamp(26px,3.6vw,52px) 20px clamp(30px,3.6vw,52px);display:flex;flex-direction:column;justify-content:center;gap:18px">
          <!-- Embedded Breadcrumb & Badge -->
          <div style="display:flex;flex-wrap:wrap;align-items:center;gap:10px">
            <nav aria-label="Breadcrumb" class="breadcrumb-inline">
              <a href="index.php">Home</a>
              <span class="crumb-sep">/</span>
              <a href="conversion-types.php">Conversion types</a>
              <span class="crumb-sep">/</span>
              <span class="crumb-current" aria-current="page">Velux™</span>
            </nav>
            <span style="color:#D4D4CC;font-size:12px">•</span>
            <span style="font-family:var(--font-sans);display:inline-flex;align-items:center;gap:6px;background:#F0F7FD;border:1px solid #CDE4F7;padding:3px 10px;border-radius:14px;color:#0C3B61;font-size:11px;font-weight:700;letter-spacing:.05em;text-transform:uppercase">
              <span style="width:5px;height:5px;border-radius:50%;background:#1B75BC;display:inline-block"></span>
              Type 01 of 06
            </span>
          </div>
          <h1 id="v-h" class="heading-h1" style="font-size:clamp(34px,5.4vw,56px);letter-spacing:-.025em;margin:0">Velux Loft Conversions</h1>
          <p style="font-family:Newsreader,Georgia,serif;font-weight:400;font-size:clamp(20px,2.4vw,25px);line-height:1.25;color:#135284;margin:-4px 0 24px;letter-spacing:-.015em">Preserve your original roofline with an elegant rooflight conversion. Because the exterior structure remains unchanged, planning approval is rarely required and construction moves swiftly with minimal disruption.</p>
          
          <!-- Key Stats / Numbers Grid on Left -->
          <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:#E4E4DF;border:1px solid #E4E4DF;max-width:440px;border-radius:3px;overflow:hidden">
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">6–8 Weeks</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Fastest build</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">£24,000</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Fixed price from</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">22 m²</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Typical floor</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">Zero</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">PD volume used</span>
            </div>
          </div>

          <div class="hero-actions-row">
            <a href="tel:01614100155" class="btn-primary hero-btn" style="display:inline-flex;align-items:center;justify-content:center;gap:8px">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 16.9v2.6a1.7 1.7 0 0 1-1.9 1.7 16.6 16.6 0 0 1-7.2-2.6 16.3 16.3 0 0 1-5-5A16.6 16.6 0 0 1 4.3 6.4 1.7 1.7 0 0 1 6 4.5h2.6a1.7 1.7 0 0 1 1.7 1.5c.1.9.3 1.7.6 2.5a1.7 1.7 0 0 1-.4 1.8l-1.1 1.1a13.4 13.4 0 0 0 5 5l1.1-1.1a1.7 1.7 0 0 1 1.8-.4c.8.3 1.6.5 2.5.6a1.7 1.7 0 0 1 1.5 1.7z"></path></svg>
              0161 4100155
            </a>
            <a href="#booking" data-open-booking class="btn-secondary hero-btn" style="display:inline-flex;align-items:center;justify-content:center;gap:7px">
              Book free survey
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#1B75BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="animation:alNudge 1.5s ease-in-out infinite"><path d="M4 12h15M13 6l6 6-6 6"></path></svg>
            </a>
          </div>
          <div style="display:flex;flex-wrap:wrap;gap:8px 16px;font-family:var(--font-sans);font-size:12.5px;font-weight:600;color:#6B6B6B">
            <span>No obligation</span><span>•</span><span>Guaranteed Fixed Quote</span><span>•</span><span>400+ finished projects</span>
          </div>
        </div>

        <!-- Inline Step 1 Widget -->
        <div style="background:#FFFFFF;border-left:1px solid #EDEDE8;display:flex;flex-direction:column">
          <div style="flex:1 1 auto;display:flex;flex-direction:column;background:#FFFFFF">
            <div style="padding:26px 26px 20px;border-bottom:1px solid #EDEDE8">
              <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px;margin-bottom:8px">
                <span class="section-label">Free survey booking</span>
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#6B6B6B;white-space:nowrap">Step 1 / 3</span>
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
                  <div style="font-family:var(--font-sans);font-size:11px;color:#6B6B6B;margin-top:3px">40m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Semi-detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V13l12-9 12 9v17M20 30V13M14 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Semi-detached</div>
                  <div style="font-family:var(--font-sans);font-size:11px;color:#6B6B6B;margin-top:3px">Most common</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V14l16-10 16 10v16zM19 30v-8h10v8"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Detached</div>
                  <div style="font-family:var(--font-sans);font-size:11px;color:#6B6B6B;margin-top:3px">50m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Bungalow">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V18l20-12 20 12v12zM18 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Bungalow</div>
                  <div style="font-family:var(--font-sans);font-size:11px;color:#6B6B6B;margin-top:3px">Dormer &amp; Velux</div>
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

    <!-- Gallery Grid with Mobile Carousel -->
    <section data-reveal class="section-padding-sm bg-white">
      <div class="container">
        <div class="gallery-header-wrap" style="display:flex;flex-wrap:wrap;gap:16px;align-items:flex-end;justify-content:space-between;margin-bottom:28px">
          <div>
            <span class="section-label">Gallery</span>
            <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 0">Velux conversions we've finished</h2>
          </div>
          <div class="gallery-header-meta" style="display:flex;align-items:center;gap:12px">
            <span style="font-family:var(--font-sans);font-size:12.5px;font-weight:600;color:#6B6B6B"><?php echo count($galleryImages); ?> of 400+ projects</span>
            <div class="velux-gal-nav" style="display:none;align-items:center;gap:8px">
              <button type="button" class="velux-gal-prev" aria-label="Previous gallery image">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
              </button>
              <button type="button" class="velux-gal-next" aria-label="Next gallery image">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="velux-gallery-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px">
          <?php foreach ($galleryImages as $img): ?>
            <div class="real-img-box velux-gallery-card" style="aspect-ratio:4/3;border-radius:6px;overflow:hidden"><img src="<?php echo $img; ?>" alt="Velux Loft Conversion" class="real-img" loading="lazy"></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Process & Fit Section -->
    <section data-reveal class="section-padding-sm bg-gray border-top border-bottom">
      <div class="container" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:44px;align-items:start">
        <div>
          <span class="section-label">Process notes</span>
          <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 24px;max-width:20ch">Our Streamlined 6 to 8-Week Velux Construction Schedule</h2>
          <ol style="list-style:none;margin:0;padding:0;display:grid;gap:14px">
            <?php foreach ($timeline as $t): ?>
              <li style="display:flex;gap:16px;align-items:baseline;padding-bottom:14px;border-bottom:1px solid #DCDCD6">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;color:#135284;flex:0 0 68px"><?php echo $t['when']; ?></span>
                <span style="font-size:15px;line-height:1.6;color:#1A1A1A"><?php echo $t['what']; ?></span>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
        <div>
          <span class="section-label">Suits / doesn't suit</span>
          <div style="display:grid;gap:14px;margin-top:20px">
            <?php foreach ($fit as $item): ?>
              <div style="display:flex;gap:12px;align-items:flex-start;background:#FFFFFF;border:1px solid #E4E4DF;border-radius:3px;padding:16px 18px">
                <span style="width:9px;height:9px;flex:0 0 9px;margin-top:6px;border-radius:50%;background:<?php echo $item['yes'] ? '#1B75BC' : '#C9C9C2'; ?>"></span>
                <span style="font-size:15px;line-height:1.55"><?php echo $item['text']; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section data-reveal aria-labelledby="price-h" class="section-padding-sm bg-dark">
      <div class="container">
        <div style="display:flex;flex-wrap:wrap;gap:20px 48px;align-items:flex-end;justify-content:space-between;margin-bottom:40px">
          <div style="flex:1 1 420px">
            <span class="section-label-light">Pricing</span>
            <h2 id="price-h" class="heading-h2" style="color:#FFFFFF;max-width:24ch">Velux Conversion Investment: Complete Inclusions & Options</h2>
          </div>
          <p style="flex:1 1 300px;max-width:38ch;font-size:15px;line-height:1.65;color:#B8B8B0;margin:0">Rooflight conversions run £22,000–£38,000 across the UK in 2026. North West build costs sit below that average, and our starting figure is a real fixed price, not a teaser.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:1px;background:#2C2C29;border:1px solid #2C2C29">
          <div style="background:#1B75BC;padding:clamp(24px,3vw,32px);display:flex;flex-direction:column;gap:18px">
            <div>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#E5F2FC">Fixed price from</span>
              <div style="font-family:Newsreader,Georgia,serif;font-size:clamp(40px,5vw,58px);line-height:1;letter-spacing:-.03em;color:#FFFFFF;margin-top:10px">£24,000</div>
              <span style="display:block;font-size:14px;line-height:1.6;color:#E5F2FC;margin-top:10px">A typical rooflight conversion, 6 to 8 weeks on site.</span>
            </div>
            <ul style="list-style:none;margin:0;padding:0;display:grid;gap:9px">
              <?php foreach ($included as $inc): ?>
                <li style="display:flex;gap:10px;align-items:flex-start;font-size:14px;line-height:1.5;color:#FFFFFF">
                  <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#FFFFFF" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 15px;margin-top:3px"><path d="M4 12.5l5 5L20 6.5"></path></svg>
                  <?php echo $inc; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <span style="font-family:var(--font-sans);font-size:12px;color:#E5F2FC;margin-top:auto">Transparent staged payments against completed work.</span>
          </div>

          <div style="background:#1A1A1A;padding:clamp(24px,3vw,32px);display:flex;flex-direction:column">
            <span style="font-family:var(--font-sans);font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#8ABFE5">What pushes it up</span>
            <dl style="margin:16px 0 0;display:grid;gap:0">
              <?php foreach ($addOns as $a): ?>
                <div class="price-addon-item">
                  <div style="display:flex;flex-wrap:wrap;gap:6px 16px;align-items:baseline;justify-content:space-between">
                    <dt style="font-size:15px;font-weight:600;color:#FFFFFF"><?php echo $a['name']; ?></dt>
                    <dd class="price-tag" style="margin:0;font-family:var(--font-sans);font-size:14px;font-weight:700;color:#8ABFE5;white-space:nowrap;transition:color .2s"><?php echo $a['price']; ?></dd>
                  </div>
                  <p style="margin:6px 0 0;font-size:13px;line-height:1.6;color:#B8B8B0;max-width:52ch"><?php echo $a['note']; ?></p>
                </div>
              <?php endforeach; ?>
            </dl>
            <p style="margin:20px 0 0;font-size:12.5px;line-height:1.6;color:#8A8A82">Ranges reflect 2026 UK market rates. Your survey converts them into one fixed figure &mdash; nothing is added later.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Inline Booking Section -->
    <section id="booking" data-reveal class="section-padding-sm bg-gray">
      <div class="container-narrow">
        <div style="display:flex;flex-wrap:wrap;gap:20px 48px;align-items:flex-end;justify-content:space-between;margin:0 0 36px">
          <div style="flex:2 1 420px">
            <span class="section-label">Free survey</span>
            <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 0">Assessing Headroom & Roof Pitch Feasibility</h2>
          </div>
          <p style="flex:1 1 260px;max-width:36ch;font-size:17px;line-height:1.6;color:#4A4A45;margin:0">We'll measure it for you. Three steps, and "not sure" is a valid answer.</p>
        </div>
        <?php 
          $widgetHeading = "Book a Velux survey";
          include 'includes/booking-widget.php'; 
        ?>
      </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section data-reveal aria-labelledby="faq-h" class="section-padding bg-white border-top">
      <div class="container faq-layout">
        <div class="faq-sticky-col">
          <span class="section-label">Velux questions</span>
          <h2 id="faq-h" class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 18px;max-width:16ch">Before you decide.</h2>
          <p style="font-size:16px;line-height:1.65;color:#4A4A45;margin:0 0 24px;max-width:38ch">Answers on planning, headroom, Building Control, stairs and cost. Anything else, ask the surveyor &mdash; the visit is free whether a rooflight conversion turns out to be right for you or not.</p>
          <div class="hero-actions-row" style="margin-top:4px;display:flex;flex-wrap:nowrap;gap:10px;align-items:center">
            <a href="#booking" data-open-booking class="btn-primary hero-btn" style="padding:12px 18px;font-size:14px;white-space:nowrap">Book Free Survey</a>
            <a href="tel:01614100155" class="btn-secondary hero-btn" style="padding:11px 16px;font-size:14px;white-space:nowrap">Ask us directly</a>
          </div>
        </div>
        <div class="faq-container-box">
          <?php foreach ($faqs as $idx => $f): 
            $num = str_pad($idx + 1, 2, '0', STR_PAD_LEFT);
            $isOpen = ($idx === 0);
          ?>
            <div class="faq-wrap <?php if ($isOpen) echo 'open'; ?>">
              <button type="button" class="faq-btn" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>">
                <span class="faq-num"><?php echo $num; ?></span>
                <span class="faq-question"><?php echo $f['q']; ?></span>
                <span class="faq-sign"><?php echo $isOpen ? '–' : '+'; ?></span>
              </button>
              <div class="faq-answer">
                <p><?php echo $f['a']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Conversion CTA Banner -->
    <section data-reveal aria-labelledby="cta-h" class="section-padding bg-primary cta-banner-section">
      <div class="container cta-banner-grid">
        <div class="cta-banner-content">
          <span class="section-label-subtle">One free visit</span>
          <h2 id="cta-h" class="heading-h1" style="font-size:clamp(34px,5vw,60px);color:#FFFFFF;margin-top:14px">We'll measure the ridge <em style="font-style:italic">before</em> you commit to anything.</h2>
          <p style="font-size:18px;line-height:1.6;margin:20px 0 30px;color:#E5F2FC;max-width:42ch">If a Velux won't work on your roof we'll say so, and show you what will. Forty-five minutes, expert layout advice, one fixed price.</p>
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
                <span style="font-size:14px;line-height:1.6;color:#6B6B6B">Ridge height, trusses, staircase route, your questions.</span>
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

  <!-- 41 Service Areas -->
  <?php include 'includes/service-areas.php'; ?>

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
