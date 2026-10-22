<?php
$pageTitle = "Bungalow & Chalet Loft Conversions — Loft Conversions North";
$pageDesc = "Loft conversions for bungalows and chalets. Rear dormer and Velux options, headroom assessed honestly, guaranteed fixed price in writing.";
$activePage = "property";
$ogImage = "images/another-area-loft-conversions-north-west-england-01.jpeg";

$schemaJson = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Loft conversion — Bungalow",
    "provider" => [
        "@type" => "LocalBusiness",
        "name" => "Loft Conversions North",
        "telephone" => "0161 4100155"
    ],
    "offers" => [
        "@type" => "Offer",
        "priceCurrency" => "GBP",
        "priceSpecification" => "Quoted case by case on survey"
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$facts = [
    ['value' => 'On survey', 'label' => 'Fixed price'],
    ['value' => '4–6 weeks', 'label' => 'Typical on site'],
    ['value' => '2.2m', 'label' => 'Headroom needed'],
    ['value' => '50m³', 'label' => 'Permitted dev volume']
];

$galleryImages = [
    'images/another-area-loft-conversions-north-west-england-06.jpeg',
    'images/another-area-loft-conversions-north-west-england-10.jpeg',
    'images/another-area-loft-conversions-north-west-england-13.jpeg',
    'images/another-area-loft-conversions-north-west-england-20.jpeg',
    'images/another-area-loft-conversions-north-west-england-21.jpeg',
    'images/another-area-loft-conversions-north-west-england-22.jpeg',
    'images/another-area-loft-conversions-north-west-england-23.jpeg',
    'images/another-area-loft-conversions-north-west-england-01.jpeg',
];

$timeline = [
    ['when' => 'Before', 'what' => 'Survey, architectural planning, structural design, planning application — allow around eight weeks.'],
    ['when' => 'Weeks 1–2', 'what' => 'Scaffold and temporary roof up, existing roof stripped and removed.'],
    ['when' => 'Weeks 2–4', 'what' => 'New structure to the agreed height, floor joists in, roof covered and watertight.'],
    ['when' => 'Weeks 5–6', 'what' => 'Insulation, staircase and enclosure, partitions and first-fix services.'],
    ['when' => 'Weeks 7–8', 'what' => 'Plastering, second-fix electrics, external finishes, sign-off and handover.']
];

$fit = [
    ['yes' => true, 'text' => 'Chalet bungalows and steeper roofs with 2.2m already — a dormer may be all you need.'],
    ['yes' => true, 'text' => 'Shallow-pitch bungalows where you want a full extra floor, not one room.'],
    ['yes' => true, 'text' => 'A hallway or bedroom that can give up the space for a proper staircase.'],
    ['yes' => false, 'text' => 'Roofs under 2.2m with shallow pitch where ceilings cannot be lowered.'],
    ['yes' => false, 'text' => 'A plot where a single-storey rear extension would be cheaper for the same result.'],
    ['yes' => false, 'text' => 'Projects with unrealistic timelines — quality craft cannot be rushed.']
];

$included = [
    'Structural design, calculations and engineer’s sign-off',
    'Temporary weatherproof scaffold roof for the whole open period',
    'New roof structure at the agreed height and pitch, or dormer where viable',
    'Tiles or slate matched to the house, new eaves, verge and rainwater goods',
    'New floor structure over the existing ceilings',
    'Bespoke staircase, protected enclosure and fire-rated doors',
    'Insulation, plasterboard, skim, first-fix and second-fix electrics',
    'Planning drawings, Building Control fees and completion certificate'
];

$addOns = [
        ['name' => 'Rear or side dormer', 'price' => 'from £50,000', 'note' => 'Where you already have 2.2m. Full headroom and 8 weeks on site.'],
    ['name' => 'Velux / rooflight', 'price' => 'from £24,000', 'note' => 'Chalet bungalows with generous ridge height only. 6–8 weeks on site.'],
    ['name' => 'Bathroom and en-suite', 'price' => '+ Quoted per spec', 'note' => 'Plumbed-in luxury wet room or en-suite with shower, basin and toilet.'],
    ['name' => 'Ground-floor alterations', 'price' => 'Quoted per spec', 'note' => 'Rearranging the hallway to take the new staircase cleanly.']
];

$faqs = [
    ['q' => 'How does converting a bungalow differ from a standard house?', 'a' => 'Bungalow conversions frequently yield the most dramatic transformations in residential construction. Because bungalows possess an expansive ground-floor footprint, converting the attic can effectively double your total living space, turning a modest 2-bed property into a 4- or 5-bed two-storey chalet home.'],
    ['q' => 'Will our bungalow foundations support a second storey?', 'a' => 'During our free technical survey, our structural engineer inspects existing foundation depths and load-bearing brickwork. If foundation capacity is standard, our steel beam design distributes the new floor weight directly over perimeter walls without requiring foundation underpinning.'],
    ['q' => 'Can a bungalow loft actually be converted?', 'a' => 'Often, yes — but it depends entirely on the pitch. Chalet bungalows and steeper 1930s roofs frequently have the 2.2m of headroom needed over half the floor area. We assess the pitch and ridge height accurately on the initial survey.'],
    ['q' => 'Will we need planning permission to convert our bungalow?', 'a' => 'If the conversion remains within existing roof slopes or uses rear dormers within the 50m³ allowance, Permitted Development applies. If planning permission is required for any reason, our in-house team handles all architectural plans and council submissions from start to finish.'],
    ['q' => 'Where is the staircase positioned in a bungalow layout?', 'a' => 'Because bungalows feature wide ground-floor hallways or generous dining areas, positioning an elegant staircase is straightforward. We incorporate under-stair storage or architectural feature handrails to complement your ground-floor interior.']
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
              <a href="property-types.php">Property types</a>
              <span class="crumb-sep">/</span>
              <span class="crumb-current" aria-current="page">Bungalow</span>
            </nav>
            <span style="color:#D4D4CC;font-size:12px">•</span>
            <span style="font-family:var(--font-sans);display:inline-flex;align-items:center;gap:6px;background:#F0F7FD;border:1px solid #CDE4F7;padding:3px 10px;border-radius:14px;color:#0C3B61;font-size:11px;font-weight:700;letter-spacing:.05em;text-transform:uppercase">
              <span style="width:5px;height:5px;border-radius:50%;background:#1B75BC;display:inline-block"></span>
              Property Type 04 of 04
            </span>
          </div>
          <h1 id="v-h" class="heading-h1" style="font-size:clamp(34px,5.4vw,56px);letter-spacing:-.025em;margin:0">Bungalow Loft Conversions</h1>
          <p style="font-family:Newsreader,Georgia,serif;font-weight:400;font-size:clamp(20px,2.4vw,25px);line-height:1.25;color:#135284;margin:-4px 0 2px;letter-spacing:-.015em">Rear dormers &amp; Velux conversions for bungalows.</p>
          <p class="lead-text" style="max-width:46ch">A bungalow roof is usually shallow, so headroom decides everything. Where there is height a rear dormer or Velux conversion delivers a spacious master suite or two bedrooms without raising the roof line.</p>
          
          <!-- Key Stats / Numbers Grid on Left -->
          <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:#E4E4DF;border:1px solid #E4E4DF;max-width:440px;border-radius:3px;overflow:hidden">
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">6–8 Wks</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Typical build</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">On survey</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Fixed quote</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">Full floor</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Layout gained</span>
            </div>
            <div style="background:#FAFAF8;padding:10px 14px;display:flex;flex-direction:column;gap:3px">
              <span style="font-family:Newsreader,Georgia,serif;font-size:clamp(19px,2vw,22px);line-height:1;letter-spacing:-.015em;color:#1A1A1A">2.2m</span>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:600;letter-spacing:.03em;text-transform:uppercase;color:#6B6B6B">Min headroom</span>
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
            <span>No obligation</span><span>&middot;</span><span>Guaranteed quote</span><span>&middot;</span><span>400+ finished projects</span>
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
                  <div style="font-family:var(--font-sans);font-size:11px;font-weight:600;color:#6B6B6B;margin-top:3px">40m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Semi-detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V13l12-9 12 9v17M20 30V13M14 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Semi-detached</div>
                  <div style="font-family:var(--font-sans);font-size:11px;font-weight:600;color:#6B6B6B;margin-top:3px">Most common</div>
                </button>
                <button type="button" class="property-opt-btn" data-property="Detached">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M8 30V14l16-10 16 10v16zM19 30v-8h10v8"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Detached</div>
                  <div style="font-family:var(--font-sans);font-size:11px;font-weight:600;color:#6B6B6B;margin-top:3px">50m³ limit</div>
                </button>
                <button type="button" class="property-opt-btn active" data-property="Bungalow" aria-pressed="true">
                  <div style="display:flex;align-items:flex-end;justify-content:flex-start;height:34px">
                    <svg viewBox="0 0 48 32" width="46" height="31" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" aria-hidden="true"><path d="M4 30V18l20-12 20 12v12zM18 30v-7h12v7"></path></svg>
                  </div>
                  <div style="font-size:14px;font-weight:600;margin-top:10px">Bungalow</div>
                  <div style="font-family:var(--font-sans);font-size:11px;font-weight:600;color:#6B6B6B;margin-top:3px">Dormer &amp; Velux</div>
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

    <!-- Gallery Grid -->
    <section data-reveal class="section-padding-sm bg-white">
      <div class="container">
        <div class="gallery-header-wrap" style="display:flex;flex-wrap:wrap;gap:20px;align-items:flex-end;justify-content:space-between;margin-bottom:32px">
          <div>
            <span class="section-label">Gallery</span>
            <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 0">Bungalows we've converted</h2>
          </div>
          <div class="gallery-header-meta" style="display:flex;align-items:center;gap:12px">
            <span style="font-family:var(--font-sans);font-size:12.5px;font-weight:600;color:#6B6B6B">8 of 400+ bungalow projects</span>
            <div class="type-gal-nav" aria-label="Gallery carousel navigation">
              <button type="button" class="type-gal-prev" aria-label="Previous image">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
              </button>
              <button type="button" class="type-gal-next" aria-label="Next image">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="type-gallery-grid">
          <?php foreach ($galleryImages as $img): ?>
            <div class="type-gallery-card real-img-box" style="aspect-ratio:4/3;border-radius:4px"><img src="<?php echo $img; ?>" alt="Property Conversion" class="real-img" loading="lazy"></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Process & Fit Section -->
    <section data-reveal class="section-padding-sm bg-gray border-top border-bottom">
      <div class="container" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:44px;align-items:start">
        <div>
          <span class="section-label">Process notes</span>
          <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 24px;max-width:20ch">The 5-Week Bungalow-to-Two-Storey Construction Schedule</h2>
          <ol style="list-style:none;margin:0;padding:0;display:grid;gap:14px">
            <?php foreach ($timeline as $t): ?>
              <li style="display:flex;gap:16px;align-items:baseline;padding-bottom:14px;border-bottom:1px solid #DCDCD6">
                <span style="font-family:var(--font-sans);font-size:12px;font-weight:700;letter-spacing:.02em;color:#1B75BC;flex:0 0 70px"><?php echo $t['when']; ?></span>
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
            <h2 id="price-h" class="heading-h2" style="color:#FFFFFF;max-width:24ch">Bungalow Transformation Costs & Foundation Verification</h2>
          </div>
          <p style="flex:1 1 300px;max-width:38ch;font-size:15px;line-height:1.65;color:#B8B8B0;margin:0">From a rooflight conversion to a full-width rear dormer. Every project is measured at your survey with a fixed price in writing.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:1px;background:#2C2C29;border:1px solid #2C2C29">
          <div style="background:#1B75BC;padding:clamp(24px,3vw,32px);display:flex;flex-direction:column;gap:18px">
            <div>
              <span style="font-family:var(--font-sans);font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#E5F2FC">Pricing method</span>
              <div style="font-family:Newsreader,Georgia,serif;font-size:clamp(34px,4vw,48px);line-height:1.05;letter-spacing:-.02em;color:#FFFFFF;margin-top:10px">Quoted per project on survey</div>
              <span style="display:block;font-size:14px;line-height:1.6;color:#E5F2FC;margin-top:10px">Dormer or Velux structure, staged payments against completed work.</span>
            </div>
            <ul style="list-style:none;margin:0;padding:0;display:grid;gap:9px">
              <?php foreach ($included as $inc): ?>
                <li style="display:flex;gap:10px;align-items:flex-start;font-size:14px;line-height:1.5;color:#FFFFFF">
                  <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#FFFFFF" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 15px;margin-top:3px"><path d="M4 12.5l5 5L20 6.5"></path></svg>
                  <?php echo $inc; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <span style="font-family:var(--font-sans);font-size:12px;font-weight:600;color:#E5F2FC;margin-top:auto">Transparent staged payments against completed work.</span>
          </div>

          <div style="background:#1A1A1A;padding:clamp(24px,3vw,32px);display:flex;flex-direction:column">
            <span style="font-family:var(--font-sans);font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#8ABFE5">Your options on a bungalow</span>
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
            <p style="margin:20px 0 0;font-size:12.5px;line-height:1.6;color:#8A8A82;font-family:var(--font-sans)">Ranges reflect 2026 UK market rates. Your survey converts them into one fixed figure &mdash; nothing is added later.</p>
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
            <h2 class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 0">Book a survey on your bungalow</h2>
          </div>
          <p style="flex:1 1 260px;max-width:36ch;font-size:17px;line-height:1.6;color:#4A4A45;margin:0">We measure existing ridge height and explain your viable dormer and Velux options. Three steps to book.</p>
        </div>
        <?php 
          $widgetHeading = "Book a Bungalow survey";
          include 'includes/booking-widget.php'; 
        ?>
      </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section data-reveal aria-labelledby="faq-h" class="section-padding bg-white border-top">
      <div class="container faq-layout">
        <div class="faq-sticky-col">
          <span class="section-label">Bungalow questions</span>
          <h2 id="faq-h" class="heading-h2" style="font-size:clamp(28px,4vw,44px);margin:12px 0 18px;max-width:16ch">Load-Bearing Foundations & Ridge Elevation for Bungalows.</h2>
          <p style="font-size:16px;line-height:1.65;color:#4A4A45;margin:0 0 24px;max-width:38ch">Answers on headroom, dormers, staircases and cost. Anything else, ask the surveyor &mdash; the visit is free whether you go ahead or not.</p>
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

    <!-- 41 Service Areas -->
    <?php include 'includes/service-areas.php'; ?>

    <!-- Property CTA Banner -->
    <section data-reveal aria-labelledby="cta-h" class="section-padding bg-primary cta-banner-section">
      <div class="container cta-banner-grid">
        <div class="cta-banner-content">
          <span class="section-label-subtle">One free visit</span>
          <h2 id="cta-h" class="heading-h1" style="font-size:clamp(34px,5vw,60px);color:#FFFFFF;margin-top:14px">We'll check your bungalow's height <em style="font-style:italic">before</em> you commit.</h2>
          <p style="font-size:18px;line-height:1.6;margin:20px 0 30px;color:#E5F2FC;max-width:42ch">We check ridge height, explain your staircase options, and provide one fixed price in writing. Forty-five minutes in your home.</p>
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
                <span style="font-size:14px;line-height:1.6;color:#6B6B6B">Ridge height, pitch inspection, staircase route.</span>
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
      let selectedProp = 'Bungalow';
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
