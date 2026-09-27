# Anleitung: Lipödem Journal bearbeiten

Diese Datei ist nur für dich und erscheint nicht auf der Website.

## Neuen Artikel anlegen

1. Lade das Titelbild in den Ordner `bilder` hoch (Add file → Upload files).
   Tipp: Dateinamen ohne Umlaute und Leerzeichen, z. B. `oktoberfest.jpg`.
2. Öffne den Ordner `_posts` und tippe auf **Add file → Create new file**.
3. Dateiname: `JAHR-MONAT-TAG-kurzer-titel.md`, zum Beispiel
   `2026-10-04-lipoedem-auf-dem-oktoberfest.md`.
   Das Datum bestimmt die Reihenfolge, der Rest wird die Adresse:
   lipödemjournal.de/blog/lipoedem-auf-dem-oktoberfest/
4. Kopiere den Inhalt von `_vorlage/neuer-artikel.md` hinein, ersetze die Texte
   und tippe auf **Commit changes**.
5. Nach 2–3 Minuten ist der Artikel online und auf der Startseite als neuester Beitrag zu sehen.

## Die Angaben oben im Artikel (zwischen den `---`)

| Angabe | Bedeutung |
|---|---|
| `titel` | Überschrift des Artikels |
| `kategorie` | `Persönlich` oder `Wissen` (genau so geschrieben) |
| `kurzbeschreibung` | Text auf der Blog-Übersicht und bei Google |
| `einleitung` | Größerer erster Absatz (optional) |
| `bild` | Titelbild, z. B. `/bilder/oktoberfest.jpg` |
| `lesezeit` | optional, z. B. `8 Min.` – sonst wird sie automatisch berechnet |
| `titelbild_hochformat: true` | wenn das Titelbild ein Hochformat-Foto ist |
| `journal_hinweis: false` | blendet den dunklen „Journal ansehen“-Kasten am Ende aus |
| `angepinnt: true` + `pin_reihenfolge: 1` | Artikel bleibt oben angeheftet |

Quellen (optional, erscheinen im beigen Kasten am Ende):

```
quellen_titel: Quellen
quellen:
  - text: "Name der Quelle, Jahr"
    link: https://…
  - text: "Quelle ohne Link"
quellen_hinweis: Dieser Beitrag ersetzt keine ärztliche Beratung.
```

Wichtig: Enthält ein Text einen Doppelpunkt, setze ihn in Anführungszeichen, z. B.
`titel: "Diagnose Lipödem: und jetzt?"`

## Schreiben im Artikel

| So schreibst du es | So sieht es aus |
|---|---|
| Leerzeile zwischen Absätzen | neuer Absatz |
| `## Überschrift` | große Zwischenüberschrift |
| `### Überschrift` | kleine, goldene Zwischenüberschrift |
| `**Wort**` | **fett** |
| `- Punkt` | Liste mit goldenen Punkten |
| `> Zitat` | hervorgehobenes Zitat |
| `[Linktext](/blog/was-ist-lipoedem/)` | Link |
| `---` | dünne Trennlinie |

Kästen und Bilder:

```
{% include box.html titel="Gut zu wissen" text="Dein Text." %}
{% include foto.html bild="/bilder/foto.jpg" %}
{% include download.html titel="Checkliste" text="Beschreibung" datei="/datei.pdf" %}
```

Im Kasten-Text keine geraden Anführungszeichen " verwenden, sondern „ und “.

## Kleine Änderungen

- **Preise und Produkte:** `_data/shop.yml`
- **Shop öffnen:** in `_config.yml` `shop_geschlossen: false` setzen
- **Über mich:** `ueber-mich.html`
- **Startseite:** `index.html`
- **Impressum, Datenschutz, AGB:** `impressum.md`, `datenschutz.md`, `agb.md`

Eine Datei bearbeiten: Datei öffnen → Stift-Symbol → ändern → **Commit changes**.

## Wenn etwas nicht klappt

So kommt eine Änderung online: GitHub baut die Website unter **Actions** („Website bauen“)
zusammen und legt das Ergebnis in den Zweig `website`. Hostinger holt sich die Seite
automatisch aus diesem Zweig.

Unter **Actions** im Repository siehst du, ob die Website erfolgreich gebaut wurde.
Ein rotes Kreuz bedeutet einen Fehler, meist ein vergessenes Anführungszeichen oder
ein fehlender Doppelpunkt oben im Artikel. Die Website bleibt dann auf dem letzten
funktionierenden Stand.
