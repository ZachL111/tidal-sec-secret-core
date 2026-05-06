# Tidal Sec Secret Core Walkthrough

This note is the quickest way to read the extra review model in `tidal-sec-secret-core`.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 181 | ship |
| stress | claim drift | 135 | watch |
| edge | replay exposure | 190 | ship |
| recovery | policy width | 201 | ship |
| stale | trust boundary | 178 | ship |

Start with `recovery` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`recovery` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
